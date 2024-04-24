const hidePass = document.querySelector(".eye-close");
const showPass = document.querySelector(".eye-open");

showPass.onclick = (e) => {
  e.target.parentElement.children[1].type = "text";
  showPass.classList.add("active");
  hidePass.classList.add("active");
};

hidePass.onclick = (e) => {
  e.target.parentElement.children[1].type = "password";
  showPass.classList.remove("active");
  hidePass.classList.remove("active");
};
