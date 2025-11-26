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

// HEADER: CHANGE ICON ON CLICK
const menuIcon = document.querySelector(".menu-icon");
if (menuIcon) {
    const menuIconOpen = menuIcon.getAttribute("src"); // ursprunglig ikon
    const menuIconClose = "/assets/kryss.svg";          // ikon när stängd

    menuIcon.dataset.state = "open"; // initiera state

    menuIcon.addEventListener("click", () => {
        const isOpen = menuIcon.dataset.state === "open";
        menuIcon.setAttribute("src", isOpen ? menuIconClose : menuIconOpen);
        menuIcon.dataset.state = isOpen ? "closed" : "open";

        menuIcon.classList.toggle("menu-icon-closed", isOpen);
        menuIcon.classList.toggle("menu-icon-open", !isOpen);
    });
}

const sizeChoice = document.querySelector(".product-popup-size-amount-choices");

sizeChoice.addEventListener("click", () => {
    sizeChoice.classList.toggle("subheading");

    

})
