const editProductButton = document.querySelector("#edit-product-button");
const removeProductButton = document.querySelector("#remove-product-button");

const closeEditModalButtons = document.querySelectorAll(".close-edit-modal-button");
const closeRemoveModalButtons = document.querySelectorAll(".close-remove-modal-button");

const editProductModal = document.querySelector("#edit-product-modal");
const removeProductModal = document.querySelector("#remove-product-modal");

const productdetailsOverlay = document.querySelector("#productdetails-overlay");

function openEditProductModal() {
  productdetailsOverlay.classList.add("visible");
  editProductModal.classList.add("open");
}

function openRemoveProductModal() {
  productdetailsOverlay.classList.add("visible");
  removeProductModal.classList.add("open");
}

function closeEditProductModal() {
  productdetailsOverlay.classList.remove("visible");
  editProductModal.classList.remove("open");
}

function closeRemoveProductModal() {
  productdetailsOverlay.classList.remove("visible");
  removeProductModal.classList.remove("open");
}

editProductButton.addEventListener("click", openEditProductModal);
removeProductButton.addEventListener("click", openRemoveProductModal);

closeEditModalButtons.forEach((button) => {
  button.addEventListener("click", closeEditProductModal);
});

closeRemoveModalButtons.forEach((button) => {
  button.addEventListener("click", closeRemoveProductModal);
});
