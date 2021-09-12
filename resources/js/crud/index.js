import React from "react";
import ReactDOM from "react-dom";
import Layout from "../components/Layout";

const Root = ({ jsonData }) => {
  const data = JSON.parse(jsonData);
  const { title, products } = data;
  return (
    <Layout title={title}>
      <table className="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre:</th>
            <th scope="col">
              <a className="btn btn-primary" href="/crud/create" role="button">
                Nuevo Producto
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          {products.map((product, index) => (
            <tr key={index}>
              <th scope="row">{index + 1}</th>
              <td>{product.name}</td>
              <td>
                <a className="btn btn-info" href={`/crud/${product.id}`}>
                  Información
                </a>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </Layout>
  );
};

if (document.getElementById("root")) {
  const data = document.getElementById("root").getAttribute("data");
  ReactDOM.render(<Root jsonData={data} />, document.getElementById("root"));
}
