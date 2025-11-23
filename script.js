// PRODUCT POPUP: COLOR CONFIGURATOR
const productImage = document.querySelector(".product-popup-img-active");
const colorButtons = document.querySelectorAll(".product-popup-color");

colorButtons.forEach(button => {
    button.addEventListener("click", () => {
        const newImage = button.getAttribute("data-img");
        productImage.src = newImage;
    });
});
