const askQuestion = document.querySelector(".ask");
const questionForm = document.querySelector(".question-form");

askQuestion.addEventListener("click", function () {
  questionForm.classList.toggle("active");
});

const clientNames = document.querySelectorAll(".client-name");
const replyNames = document.querySelectorAll(".answer-name");

for (let i = 0; i < clientNames.length; i++) {
  let clientName = clientNames[i];

  let clientImg = clientName.parentElement.children[0];

  clientImg.innerText = clientName.innerText[0];
}

for (let i = 0; i < replyNames.length; i++) {
  let replyName = replyNames[i];

  let replyImg = replyName.parentElement.children[0];

  replyImg.innerText = replyName.innerText[0];
}
