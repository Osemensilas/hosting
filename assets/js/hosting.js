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

window.onload = function() {
    const billingOptions = document.querySelector(
        ".hosting-plan-method-content"
    ).children;
    const hostingPlans = document.querySelectorAll(".hosting-content");

    billingOptions[0].classList.add("active");

    for (let i = 0; i < billingOptions.length; i++) {
        let billingOption = billingOptions[i];

        billingOption.addEventListener("click", function() {
            billingOption.classList.add("active");
            billingOption.classList.add("null");
            for (let j = 0; j < billingOptions.length; j++) {
                let billing = billingOptions[j];

                if (billingOptions[0].classList.contains("active")) {
                    hostingPlans[0].classList.add("active");
                    hostingPlans[1].classList.remove("active");
                    hostingPlans[2].classList.remove("active");
                } else if (billingOptions[1].classList.contains("active")) {
                    hostingPlans[1].classList.add("active");
                    hostingPlans[0].classList.remove("active");
                    hostingPlans[2].classList.remove("active");
                } else {
                    hostingPlans[1].classList.remove("active");
                    hostingPlans[0].classList.remove("active");
                    hostingPlans[2].classList.add("active");
                }

                if (!billing.classList.contains("null")) {
                    billing.classList.remove("active");
                } else {
                    billingOption.classList.remove("null");
                }
            }
        });
    }
};