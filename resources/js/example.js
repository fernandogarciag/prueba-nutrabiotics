import React from "react";
import ReactDOM from "react-dom";
import Layout from "./components/Layout";

function Root({ jsonData }) {
    const data = JSON.parse(jsonData);
    const { title } = data;
    return <Layout title={title}>I'm an example component!</Layout>;
}

if (document.getElementById("root")) {
    const data = document.getElementById("root").getAttribute("data");
    ReactDOM.render(<Root jsonData={data} />, document.getElementById("root"));
}
