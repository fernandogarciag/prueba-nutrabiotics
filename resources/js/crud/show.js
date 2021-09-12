import React from "react";
import ReactDOM from "react-dom";
import Layout from "../components/Layout";

const Root = ({ jsonData }) => {
  const data = JSON.parse(jsonData);
  const { auth, title, csrf, product, category } = data;
  return (
    <Layout auth={auth} csrf={csrf} title={title}>
      <div className="mb-2">
        <a href="/crud" type="button" className="btn btn-primary me-2">
          Regresar
        </a>
        <a
          href={`/crud/${product.id}/edit`}
          type="button"
          className="btn btn-warning me-2"
        >
          Editar
        </a>
        <a
          className="btn btn-warning me-2"
          onClick={(e) => {
            e.preventDefault();
            if (confirm("Esta seguro que desea duplicar el producto")) {
              document.getElementById("duplicate-form").submit();
            }
          }}
        >
          Duplicar
        </a>
        <form
          id="duplicate-form"
          action={`/crud/${product.id}`}
          method="post"
          className="d-none"
        >
          <input type="hidden" name="_token" value={csrf} />
        </form>
        <a
          className="btn btn-danger"
          onClick={(e) => {
            e.preventDefault();
            if (confirm("Esta seguro que desea borrar el producto")) {
              document.getElementById("destroy-form").submit();
            }
          }}
        >
          Borrar
        </a>
        <form
          id="destroy-form"
          action={`/crud/${product.id}`}
          method="post"
          className="d-none"
        >
          <input type="hidden" name="_method" value="DELETE" />
          <input type="hidden" name="_token" value={csrf} />
        </form>
      </div>
      <ul className="list-group">
        <li className="list-group-item">Nombre del producto: {product.name}</li>
        <li className="list-group-item">
          Categoría del producto: {category.name}
        </li>
        <li className="list-group-item">
          Descripción corta del producto: {product.short_description}
        </li>
        <li className="list-group-item">
          Descripción del producto: {product.description}
        </li>
        <li className="list-group-item">
          Componentes del producto: {product.components}
        </li>
        <li className="list-group-item">
          Cantidad del producto: {product.quantity}
        </li>
        <li className="list-group-item">
          Precio del producto: {product.price}
        </li>
        <li className="list-group-item">
          Descuento del producto: {product.discount}%
        </li>
      </ul>
      <figure class="figure">
        <img src={product.image} class="figure-img img-fluid rounded" alt="" />
      </figure>
    </Layout>
  );
};

if (document.getElementById("root")) {
  const data = document.getElementById("root").getAttribute("data");
  ReactDOM.render(<Root jsonData={data} />, document.getElementById("root"));
}
