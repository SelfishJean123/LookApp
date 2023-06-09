const addProductButton = document.querySelector("#add-product-button");
const closeAddModalButton = document.querySelector("#close-add-modal-button");

const addProductModal = document.querySelector("#add-product-modal");
const productsOverlay = document.querySelector("#products-overlay");

function openAddProductModal() {
  productsOverlay.classList.add("visible");
  addProductModal.classList.add("open");
}

function closeAddProductModal() {
  productsOverlay.classList.remove("visible");
  addProductModal.classList.remove("open");
}

addProductButton.addEventListener("click", openAddProductModal);
closeAddModalButton.addEventListener("click", closeAddProductModal);
