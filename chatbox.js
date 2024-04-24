const chatIcon = document.querySelector("#chats");
const chat = document.querySelector("#main-chat");
const cancelChat = document.querySelector(".cancel-icon");
const provideDetails = document.querySelector(".provide-details");
const provideDetailsImg = document.querySelector(".provide-details img");
const newUser = document.querySelector(".new-user-details");

chatIcon.onclick = function() {
    chat.classList.toggle("active");
};

cancelChat.onclick = function() {
    chat.classList.toggle("active");
    newUser.classList.add("active");
};

provideDetails.onclick = function() {
    provideDetailsImg.classList.toggle("active");
    newUser.classList.toggle("active");
};

const form = document.querySelector(".chats-bottom");
const textArea = document.querySelector("#typed-message");
const sendBtn = document.querySelector(".msg-chat-btn");
const chatArea = document.querySelector(".main-chat-details-bottom");
const noChat = document.querySelector(".no-chat-yet");

form.onsubmit = (e) => {
    e.preventDefault();
};

sendBtn.onclick = function() {
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
                if (data == "") {
                    chatArea.classList.remove("active");
                    noChat.classList.remove("active");
                } else {
                    chatArea.classList.add("active");
                    noChat.classList.add("active");
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

const visitorBtn = document.querySelector(".visitor");
const visitorForm = document.querySelector(".main-chat-customer-detail");
const visitorError = document.querySelector(".visitor-error");
const mainChatBoxContent = document.querySelector(".main-chatbox-content");

visitorForm.onsubmit = function(e) {
    e.preventDefault();
};

visitorBtn.addEventListener("click", function() {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "assets/php/visitor.php", true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (this.response == "") {} else {
                    if (this.response == "Name required") {
                        visitorError.innerText = this.response;
                    } else if (this.response == "Email required") {
                        visitorError.innerText = this.response;
                    } else if (this.response == "Invalid email address") {
                        visitorError.innerText = this.response;
                    } else if (this.response == "Email exist, Please log in") {
                        visitorError.innerText = this.response;
                    } else if (this.response == "Enter a valid name") {
                        visitorError.innerText = this.response;
                    } else {
                        const myVisitor = JSON.parse(this.responseText);

                        if (myVisitor[2] == "ok") {
                            const visitorName = document.querySelector(".v-name");
                            const noChat = document.querySelector(".no-chat-yet");
                            const visitorRegForm = document.querySelector(
                                ".main-chat-customer-detail"
                            );
                            const typeArea = document.querySelector(".chats-bottom");

                            visitorName.innerText = myVisitor[0];

                            noChat.classList.remove("active");
                            visitorRegForm.classList.add("active");
                            typeArea.classList.remove("active");
                            mainChatBoxContent.classList.remove("active");
                        }
                    }
                }
            }
        }
    };

    let visitorData = new FormData(visitorForm);
    xhr.send(visitorData);
});