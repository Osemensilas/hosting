const menu = document.getElementsByClassName("menu");

for (let i = 0; i < menu.length; i++) {
    let eachMenu = menu[i];

    eachMenu.addEventListener("mouseenter", () => {
        let submenu = eachMenu.children[1];

        submenu.classList.add("active");

        submenu.addEventListener("mouseenter", () => {
            submenu.classList.add("active");
        });

        submenu.addEventListener("mouseleave", () => {
            submenu.classList.remove("active");
        });
    });

    eachMenu.addEventListener("mouseleave", () => {
        let submenu = eachMenu.children[1];

        submenu.classList.remove("active");
    });
}

const hamContainer = document.querySelector(".hamburger-container");
const hamburger = document.querySelector(".hamburger");
const anchors = document.querySelector(".header-link");
const headerBottom = document.querySelector(".header-bottom");
const shoppingCart = document.querySelector(".shopping-cart-container");

hamContainer.addEventListener("click", () => {
    hamContainer.classList.toggle("active");
    hamburger.classList.toggle("active");
    anchors.classList.toggle("active");
    shoppingCart.classList.toggle("active");
    headerBottom.classList.toggle("active");
});