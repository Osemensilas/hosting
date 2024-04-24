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

const itemsPrice = document.querySelectorAll(".items-cost");

let totalPrice = 0;

for (let i = 0; i < itemsPrice.length; i++) {
    let itemPrice = parseFloat(itemsPrice[i].innerHTML);

    totalPrice += itemPrice;
}

document.querySelector(".money").innerHTML = totalPrice.toFixed(2);