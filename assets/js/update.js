const checkBtn = document.querySelector(".check-container");
const checkImg = document.querySelector(".check-container img");
const company = document.querySelector(".company-address");

checkBtn.addEventListener("click", function() {
    checkImg.classList.toggle("active");
    company.classList.toggle("active");
});