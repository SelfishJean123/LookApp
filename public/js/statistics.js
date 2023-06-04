const favouritesButtons = document.querySelectorAll(".product-tile .favourites");

function checkFavourites() {
  const favourites = this;
  const container = favourites.parentElement.parentElement;
  const id = container.getAttribute("id");

  fetch(`/favourites/${id}`).then(function () {
    favourites.children[0].innerHTML = parseInt(favourites.children[0].innerHTML) + 1;
    favourites.classList.add("clicked");
  });
}

favouritesButtons.forEach((button) => button.addEventListener("click", checkFavourites));
