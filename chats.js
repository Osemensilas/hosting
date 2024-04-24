const chatForm = document.querySelector(".chats-bottom");
const formBtn = document.querySelector(".submit-btn");
const chatArea = document.querySelector(".sender-container");
const noChat = document.querySelector(".no-chat-yet");
const messageTyping = document.querySelector("#typed-message");
chatForm.onsubmit = function(e) {
    e.preventDefault();
};

formBtn.addEventListener("click", function() {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "assets/php/insertchat.php", true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                let data = xhr.response;
                messageTyping.value == "";
                scrollBottom();
            }
        }
    };

    let formData = new FormData(chatForm);

    xhr.send(formData);
});

setInterval(() => {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "assets/php/getchat.php", true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                let data = xhr.response;

                if (data == "") {
                    noChat.classList.add("active");
                    chatArea.classList.remove("active");
                } else {
                    noChat.classList.remove("active");
                    chatArea.classList.add("active");
                }
                chatArea.innerHTML = data;
            }
        }
    };

    let formData = new FormData(chatForm);

    xhr.send(formData);
}, 500);

function scrollBottom() {
    chatArea.scrollTop = chatArea.scrollHeight;
}