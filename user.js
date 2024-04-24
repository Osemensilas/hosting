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
const changeMailBtnForm = document.querySelector(".auth-code-inner-container");
const changeMailBtn = document.querySelector(".auth-submit-btn");
const emailError = document.querySelector(".email_error");
const passwordError = document.querySelector(".password_error");
const emailContainer = document.querySelector(".email-container").children[0];
const authEmail = document.querySelector(".auth-code-middle-right p");

changeMailBtnForm.onsubmit = function(e) {
    e.preventDefault();
};

authBtn.addEventListener("click", function() {
    authContainer.classList.add("active");
});

topCancel.addEventListener("click", function() {
    authContainer.classList.remove("active");
});

bottomCancel.addEventListener("click", function() {
    authContainer.classList.remove("active");
});

changeMailBtn.addEventListener("click", function() {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "assets/php/mail.php", true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                let data = xhr.response;

                if (data == "Invalid email address") {
                    emailError.innerText = data;
                    passwordError.innerText = "";
                } else if (data == "New email required") {
                    emailError.innerText = data;
                    passwordError.innerText = "";
                } else if (data == "Incorrect password") {
                    emailError.innerText = "";
                    passwordError.innerText = data;
                } else if (data == "Password required") {
                    emailError.innerText = "";
                    passwordError.innerText = data;
                } else if (data == "Email already exist") {
                    emailError.innerText = data;
                    passwordError.innerText = "";
                } else {
                    authContainer.classList.remove("active");
                    emailContainer.innerText = data;
                    authEmail.innerText = data;
                }
            }
        }
    };

    let formData = new FormData(changeMailBtnForm);
    xhr.send(formData);
});