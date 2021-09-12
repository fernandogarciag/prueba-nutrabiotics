import React, { useState } from "react";
import ReactDOM from "react-dom";
import Layout from "../components/Layout";

const Root = ({ jsonData }) => {
  const data = JSON.parse(jsonData);
  const { title, csrf, errors, old, product, categories } = data;
  const [discount, setDiscount] = useState(
    old.discount ? old.discount : product.discount
  );
  return (
    <Layout title={title}>
      <a
        href={`/crud${product.name ? `/${product.id}` : ""}`}
        type="button"
        className="btn btn-primary mb-2"
      >
        Regresar
      </a>
      <form
        method="POST"
        action={`/crud${product.name ? `/${product.id}` : ""}`}
      >
        {product.name ? <input type="hidden" name="_method" value="PUT" /> : ""}
        <input type="hidden" name="_token" value={csrf} />
        <div className="form-group row mb-3">
          <label
            htmlFor="name"
            className="col-md-4 col-form-label text-md-right"
          >
            Nombre
          </label>
          <div className="col-md-6">
            <input
              id="name"
              type="text"
              className={`form-control${
                errors.name.length !== 0 ? " is-invalid" : ""
              }`}
              defaultValue={old.name ? old.name : product.name}
              name="name"
              autoComplete="name"
              required
              autoFocus
            />
            {errors.name.length !== 0 ? (
              <span className="invalid-feedback" role="alert">
                <strong>{errors.name}</strong>
              </span>
            ) : (
              ""
            )}
          </div>
        </div>
        <div className="form-group row mb-3">
          <label
            htmlFor="category_id"
            className="col-md-4 col-form-label text-md-right"
          >
            Categoría
          </label>
          <div className="col-md-6">
            <select
              id="category_id"
              className={`form-control${
                errors.category_id.length !== 0 ? " is-invalid" : ""
              }`}
              name="category_id"
              defaultValue={
                old.category_id ? old.category_id : product.category_id
              }
              required
            >
              <option>Escoge la categoría del producto</option>
              {categories.map((category, index) => (
                <option key={index} value={category.id}>
                  {category.name}
                </option>
              ))}
            </select>
            {errors.category_id.length !== 0 ? (
              <span className="invalid-feedback" role="alert">
                <strong>{errors.category_id}</strong>
              </span>
            ) : (
              ""
            )}
          </div>
        </div>
        <div className="form-group row mb-3">
          <label
            htmlFor="name"
            className="col-md-4 col-form-label text-md-right"
          >
            Descripción corta
          </label>
          <div className="col-md-6">
            <textarea
              id="short_description"
              className={`form-control${
                errors.short_description.length !== 0 ? " is-invalid" : ""
              }`}
              defaultValue={
                old.short_description
                  ? old.short_description
                  : product.short_description
              }
              name="short_description"
              required
              autoFocus
            />
            {errors.short_description.length !== 0 ? (
              <span className="invalid-feedback" role="alert">
                <strong>{errors.short_description}</strong>
              </span>
            ) : (
              ""
            )}
          </div>
        </div>
        <div className="form-group row mb-3">
          <label
            htmlFor="name"
            className="col-md-4 col-form-label text-md-right"
          >
            Descripción
          </label>
          <div className="col-md-6">
            <textarea
              id="description"
              className={`form-control${
                errors.description.length !== 0 ? " is-invalid" : ""
              }`}
              defaultValue={
                old.description ? old.description : product.description
              }
              name="description"
              required
              autoFocus
            />
            {errors.description.length !== 0 ? (
              <span className="invalid-feedback" role="alert">
                <strong>{errors.description}</strong>
              </span>
            ) : (
              ""
            )}
          </div>
        </div>
        <div className="form-group row mb-3">
          <label
            htmlFor="name"
            className="col-md-4 col-form-label text-md-right"
          >
            Componentes
          </label>
          <div className="col-md-6">
            <textarea
              id="components"
              className={`form-control${
                errors.components.length !== 0 ? " is-invalid" : ""
              }`}
              defaultValue={
                old.components ? old.components : product.components
              }
              name="components"
              required
              autoFocus
            />
            {errors.components.length !== 0 ? (
              <span className="invalid-feedback" role="alert">
                <strong>{errors.components}</strong>
              </span>
            ) : (
              ""
            )}
          </div>
        </div>
        <div className="form-group row mb-3">
          <label
            htmlFor="image"
            className="col-md-4 col-form-label text-md-right"
          >
            Imagen
          </label>
          <div className="col-md-6">
            <input
              id="image"
              type="text"
              className={`form-control${
                errors.image.length !== 0 ? " is-invalid" : ""
              }`}
              defaultValue={old.image ? old.image : product.image}
              name="image"
              required
            />
            {errors.image.length !== 0 ? (
              <span className="invalid-feedback" role="alert">
                <strong>{errors.image}</strong>
              </span>
            ) : (
              ""
            )}
          </div>
        </div>
        <div className="form-group row mb-3">
          <label
            htmlFor="quantity"
            className="col-md-4 col-form-label text-md-right"
          >
            Cantidad
          </label>
          <div className="col-md-6">
            <input
              id="quantity"
              type="number"
              className={`form-control${
                errors.quantity.length !== 0 ? " is-invalid" : ""
              }`}
              defaultValue={old.quantity ? old.quantity : product.quantity}
              name="quantity"
              required
            />
            {errors.quantity.length !== 0 ? (
              <span className="invalid-feedback" role="alert">
                <strong>{errors.quantity}</strong>
              </span>
            ) : (
              ""
            )}
          </div>
        </div>
        <div className="form-group row mb-3">
          <label
            htmlFor="price"
            className="col-md-4 col-form-label text-md-right"
          >
            Precio
          </label>
          <div className="col-md-6">
            <input
              id="price"
              type="number"
              className={`form-control${
                errors.price.length !== 0 ? " is-invalid" : ""
              }`}
              defaultValue={old.price ? old.price : product.price}
              name="price"
              required
            />
            {errors.price.length !== 0 ? (
              <span className="invalid-feedback" role="alert">
                <strong>{errors.price}</strong>
              </span>
            ) : (
              ""
            )}
          </div>
        </div>
        <div className="form-group row mb-3">
          <label
            htmlFor="discount"
            className="col-md-4 col-form-label text-md-right"
          >
            Descuento: {discount}%
          </label>
          <div className="col-md-6">
            <input
              id="discount"
              type="range"
              className={`form-range${
                errors.discount.length !== 0 ? " is-invalid" : ""
              }`}
              defaultValue={old.discount ? old.discount : product.discount}
              name="discount"
              min="0"
              max="100"
              onChange={(r) => {
                setDiscount(r.target.value);
              }}
              required
            />
            {errors.discount.length !== 0 ? (
              <span className="invalid-feedback" role="alert">
                <strong>{errors.discount}</strong>
              </span>
            ) : (
              ""
            )}
          </div>
        </div>
        <div className="form-group row mb-0">
          <div className="col-md-6 offset-md-4">
            <button type="submit" className="btn btn-primary">
              {product.name ? "Editar Producto" : "Nuevo Producto"}
            </button>
          </div>
        </div>
      </form>
    </Layout>
  );
};

if (document.getElementById("root")) {
  const data = document.getElementById("root").getAttribute("data");
  ReactDOM.render(<Root jsonData={data} />, document.getElementById("root"));
}
