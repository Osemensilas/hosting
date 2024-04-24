function checkValues() {
  const firstnameInput = document.getElementById("firstname");
  const lastnameInput = document.querySelector("#lastname");
  const emailInput = document.querySelector("#email");
  const password1Input = document.querySelector("#password1");
  const password2Input = document.querySelector("#password2");

  var contains_alphaNumeric = /^(?!-)(?!.*-)[A-Za-z0-9-]+(?<!-)$/;
  var myPassVerif = /\w/;
  var containsNumber = /d+/;
  var containsAlphabet = /[a-zA-Z]/;
  var onlyLetters = /^[A-Za-z]+$/;
  var onlyNumbers = /^[0-9]+$/;
  var onlyMixOfAlphaNumeric = /^([0-9]+[a-zA-Z]+|[a-zA-Z]+[0-9]+)[0-9a-zA-Z]*$/;
  var emailRegex = /[a-z0-9]+@[a-z]+\.[a-z]{2,3}/;
  var oneUpperCase = /(?=.*[A-Z])/;
  var oneLowerCase = /(?=.*[a-z])/;
  var oneSpecialChar = /(?=.*[-+_!@#$%^&*., ?])/;
  var oneDigit = /(?=.*[0-9])/;

  firstnameInput.onkeyup = function () {
    const validationsIcons = document.querySelectorAll(".validation-icon img");
    const validationsErrors = document.querySelectorAll(".error-detail");

    if (onlyLetters.test(firstnameInput.value)) {
      firstnameInput.classList.add("typing");
      validationsIcons[0].classList.add("active");
      validationsIcons[1].classList.add("active");
      validationsErrors[0].classList.add("active");
    } else {
      firstnameInput.classList.remove("typing");
      validationsIcons[0].classList.remove("active");
      validationsIcons[1].classList.remove("active");
      validationsErrors[0].classList.remove("active");
    }
  };

  lastnameInput.onkeyup = function () {
    const validationsIcons = document.querySelectorAll(".validation-icon img");
    const validationsErrors = document.querySelectorAll(".error-detail");

    if (onlyLetters.test(lastnameInput.value)) {
      lastnameInput.classList.add("typing");
      validationsIcons[2].classList.add("active");
      validationsIcons[3].classList.add("active");
      validationsErrors[1].classList.add("active");
    } else {
      lastnameInput.classList.remove("typing");
      validationsIcons[3].classList.remove("active");
      validationsIcons[2].classList.remove("active");
      validationsErrors[1].classList.remove("active");
    }
  };

  emailInput.onkeyup = function () {
    const validationsIcons = document.querySelectorAll(".validation-icon img");
    const validationsErrors = document.querySelectorAll(".error-detail");

    if (emailRegex.test(emailInput.value)) {
      emailInput.classList.add("typing");
      validationsIcons[4].classList.add("active");
      validationsIcons[5].classList.add("active");
      validationsIcons[6].classList.remove("active");
      validationsErrors[2].classList.add("active");
      validationsErrors[2].classList.remove("typing");
    } else if (emailInput.value.length >= 1) {
      validationsIcons[5].classList.add("active");
      validationsIcons[4].classList.remove("active");
      validationsIcons[6].classList.add("active");
      validationsErrors[2].classList.add("typing");
      validationsErrors[2].classList.remove("active");
    } else {
      emailInput.classList.remove("typing");
      validationsErrors[2].classList.remove("typing");
      validationsIcons[6].classList.remove("active");
      validationsIcons[5].classList.remove("active");
      validationsIcons[4].classList.remove("active");
      validationsErrors[2].classList.remove("active");
    }
  };

  password1Input.onkeyup = function () {
    const validationsIcons = document.querySelectorAll(".validation-icon img");
    const validationsErrors = document.querySelectorAll(".error-detail");

    if (password1Input.value.length >= 8) {
      validationsIcons[7].classList.add("active");
      validationsIcons[8].classList.add("active");
      validationsIcons[9].classList.remove("active");
      validationsErrors[3].classList.add("active");
      validationsErrors[3].classList.remove("typing");
    } else if (password1Input.value.length != 0) {
      password1Input.classList.add("typing");
      validationsIcons[7].classList.remove("active");
      validationsIcons[8].classList.add("active");
      validationsIcons[9].classList.add("active");
      validationsErrors[3].classList.add("typing");
      validationsErrors[3].classList.remove("active");
    } else {
      validationsIcons[7].classList.remove("active");
      validationsIcons[8].classList.remove("active");
      validationsIcons[9].classList.remove("active");
      validationsErrors[3].classList.remove("active");
      validationsErrors[3].classList.remove("typing");
    }

    if (oneUpperCase.test(password1Input.value)) {
      validationsIcons[10].classList.add("active");
      validationsIcons[11].classList.add("active");
      validationsIcons[12].classList.remove("active");
      validationsErrors[4].classList.add("active");
    } else {
      validationsIcons[10].classList.remove("active");
      validationsIcons[11].classList.remove("active");
      validationsIcons[12].classList.remove("active");
      validationsErrors[4].classList.remove("active");
    }

    if (oneLowerCase.test(password1Input.value)) {
      validationsIcons[13].classList.add("active");
      validationsIcons[14].classList.add("active");
      validationsIcons[15].classList.remove("active");
      validationsErrors[5].classList.add("active");
    } else {
      validationsIcons[13].classList.remove("active");
      validationsIcons[14].classList.remove("active");
      validationsIcons[15].classList.remove("active");
      validationsErrors[5].classList.remove("active");
    }

    if (oneDigit.test(password1Input.value)) {
      validationsIcons[16].classList.add("active");
      validationsIcons[17].classList.add("active");
      validationsIcons[18].classList.remove("active");
      validationsErrors[6].classList.add("active");
    } else {
      validationsIcons[16].classList.remove("active");
      validationsIcons[17].classList.remove("active");
      validationsIcons[18].classList.remove("active");
      validationsErrors[6].classList.remove("active");
    }

    if (oneSpecialChar.test(password1Input.value)) {
      validationsIcons[19].classList.add("active");
      validationsIcons[20].classList.add("active");
      validationsIcons[21].classList.remove("active");
      validationsErrors[7].classList.add("active");
    } else {
      validationsIcons[19].classList.remove("active");
      validationsIcons[20].classList.remove("active");
      validationsIcons[21].classList.remove("active");
      validationsErrors[7].classList.remove("active");
    }
  };

  password2Input.onkeyup = function () {
    const validationsIcons = document.querySelectorAll(".validation-icon img");
    const validationsErrors = document.querySelectorAll(".error-detail");

    if (password2Input.value.length != 0) {
      password2Input.classList.add("typing");
      validationsIcons[22].classList.remove("active");
      validationsIcons[23].classList.add("active");
      validationsIcons[24].classList.add("active");
      validationsErrors[8].classList.add("typing");
    } else {
      password2Input.classList.remove("typing");
      validationsIcons[22].classList.remove("active");
      validationsIcons[23].classList.remove("active");
      validationsIcons[24].classList.remove("active");
      validationsErrors[8].classList.remove("typing");
    }

    if (password2Input.value == password1Input.value) {
      validationsIcons[22].classList.add("active");
      validationsIcons[23].classList.add("active");
      validationsIcons[24].classList.remove("active");
      validationsErrors[8].classList.add("active");
    } else {
      validationsIcons[22].classList.remove("active");
      validationsIcons[23].classList.add("active");
      validationsIcons[24].classList.add("active");
      validationsErrors[8].classList.remove("active");
    }

    if (password2Input.value == "") {
      validationsIcons[22].classList.remove("active");
      validationsIcons[23].classList.remove("active");
      validationsIcons[24].classList.remove("active");
      validationsErrors[8].classList.remove("active");
    }
  };
}

checkValues();
