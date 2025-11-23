// PRODUCT POPUP: COLOR CONFIGURATOR
// const productImage = document.querySelector(".product-popup-img-active");
// const colorButtons = document.querySelectorAll(".product-popup-color");

// colorButtons.forEach(button => {
//     button.addEventListener("click", () => {
//         const newImage = button.getAttribute("data-img");
//         productImage.src = newImage;
//     });
// });

// PRODUCT POPUP: COLOR CONFIGURATOR
const productImagePrimary = document.querySelector(".product-popup-img-1");
const productImageSecondary = document.querySelector(".product-popup-img-2");
const colorButtons = document.querySelectorAll(".product-popup-color");

colorButtons.forEach(button => {
    button.addEventListener("click", () => {
        const newImagePrimary = button.getAttribute("data-img");
        const newImageSecondary = button.getAttribute("data-img-secondary");
        
        productImagePrimary.src = newImagePrimary;
        
        if (newImageSecondary && productImageSecondary) {
            productImageSecondary.src = newImageSecondary;
        }
    });
});
