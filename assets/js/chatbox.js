const chatIcon = document.querySelector("#chats");
const chat = document.querySelector("#main-chat");
const cancelChat = document.querySelector(".cancel-icon");
const provideDetails = document.querySelector(".provide-details");
const provideDetailsImg = document.querySelector(".provide-details img");
const newUser = document.querySelector(".new-user-details");

chatIcon.onclick = function () {
  chat.classList.toggle("active");
};

cancelChat.onclick = function () {
  chat.classList.toggle("active");
  newUser.classList.add("active");
};

provideDetails.onclick = function () {
  provideDetailsImg.classList.toggle("active");
  newUser.classList.toggle("active");
};

const form = document.querySelector(".chats-bottom");
const textArea = document.querySelector("#typed-message");
const sendBtn = document.querySelector(".submit-btn img");
const chatArea = document.querySelector(".main-chat-details-bottom");

form.onsubmit = function (e) {
  e.preventDefault;
};

sendBtn.onclick = function () {
  let xhr = new XMLHttpRequest();

  //xhr.open("POST", "../php/insertchat.php", true);
  xhr.onload = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log("Hello World");
      }
    }
  };
};
