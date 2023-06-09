const favouriteDetailsButton = document.querySelector(".product-details .product-favourites");

function checkFavourites() {
  const favourites = this;
  const container = favourites.parentElement.parentElement;
  const id = container.getAttribute("id");

  fetch(`/favourites/${id}`).then(function () {
    favourites.children[1].innerHTML = parseInt(favourites.children[1].innerHTML) + 1;
    favourites.classList.add("clicked");
  });
}

favouriteDetailsButton.addEventListener("click", checkFavourites);
