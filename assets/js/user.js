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

const authBtn = document.querySelector(".edit-user");
const authContainer = document.querySelector(".auth-code-container");
const topCancel = document.querySelector(".auth-code-header-cancel");
const bottomCancel = document.querySelector(
    ".auth-code-submit-btn-container p"
);

authBtn.addEventListener("click", function() {
    authContainer.classList.add("active");
});

topCancel.addEventListener("click", function() {
    authContainer.classList.remove("active");
});

bottomCancel.addEventListener("click", function() {
    authContainer.classList.remove("active");
});