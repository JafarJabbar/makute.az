const activeImage = document.querySelector(".product-image img");
const productImages = document.querySelectorAll(".item-gallery img");

function changeImage(e) {
    activeImage.src = e.target.src;
}

productImages.forEach(image => image.addEventListener("click", changeImage));

