const search = document.querySelector('input[name="search-for-product"]');
const productsContainer = document.querySelector(".products");

search.addEventListener("keyup", function (event) {
  if (event.key === "Enter") {
    event.preventDefault();
    const data = { search: this.value };

    fetch("/search", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (products) {
        productsContainer.innerHTML = "";
        loadProducts(products);
      });
  }
});

function loadProducts(products) {
  products.forEach((product) => {
    createProduct(product);
  });
}

function createProduct(product) {
  const template = document.querySelector("#product-template");
  const clone = template.content.cloneNode(true);

  const div = clone.querySelector(".product-tile");
  div.id = product.id;

  const imageSelector = clone.querySelector("img");
  imageSelector.src = `/public/uploads/${product.file}`;

  const nameSelector = clone.querySelector("h5");
  nameSelector.innerHTML = product.name;

  const idInputSelector = clone.querySelector("input");
  idInputSelector.value = product.id;

  productsContainer.appendChild(clone);
}
