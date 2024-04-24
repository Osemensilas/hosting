const goBack = document.querySelector(".header-left");

goBack.onclick = () => {
  history.back();
};

const form = document.querySelector(".chats-bottom");
const textArea = document.querySelector("#typed-message");
const sendBtn = document.querySelector(".submit-btn");
const chatArea = document.querySelector(".message");

form.onsubmit = (e) => {
  e.preventDefault();
};

sendBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "assets/php/insertchat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        textArea.value = "";
        scrollToBottom();
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};

setInterval(() => {
  xhr = new XMLHttpRequest();
  xhr.open("POST", "assets/php/getchat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        chatArea.innerHTML = data;
        if (!chatArea.classList.contains("active")) {
          scrollToBottom();
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
}, 500);

function scrollToBottom() {
  chatArea.scrollTop = chatArea.scrollHeight;
}
