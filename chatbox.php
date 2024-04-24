<section id="chats">
    <div title="chats"><img src="assets/imgs/chat.png" alt=""></div>
</section>

<section id="main-chat">
    <div class="main-chat-top">
        <div class="main-chat-top-top">
            <div class="cancel-icon"></div>
        </div>
        <div class="main-chat-top-bottom">
            <img src="assets/imgs/live-chat.png" alt="">
            <p>Hello,
            <p class="v-name"><?php echo  $client_name; ?></p>
            </p>
        </div>
        <form action="#" class="main-chat-customer-detail <?php echo $userPresent; ?>">
            <div class="main-chat-details-top">
                <p>Welcome to our live chat!</p>
                <p>Please <a href="#">log in</a> if you already have an account, or kindly
                    <a class="provide-details">provide your details.<img src="assets/imgs/down-arrow.png" class="" alt=""></a>
                </p>
                <div class="new-user-details active">
                    <div class="visitor-error"></div>
                    <div class="detail">
                        <label for="fullname">Name</label>
                        <input type="text" name="fullname" id="fullname" placeholder="Enter your name here">
                    </div>
                    <div class="detail">
                        <label for="email">Email*</label>
                        <input type="text" name="email" id="email" placeholder="Enter your name here">
                    </div>
                    <div class="detail-submit-btn-container">
                        <input type="submit" name="visitor" class="submit-btn visitor" value="Submit">
                    </div>
                </div>
            </div>
        </form>
        <div class="main-chatbox-content <?php echo $bootomChat; ?>">
            <div class="no-chat-yet <?php echo $noChat; ?>">
                <p>Begin chat with our customer care representative</p>
            </div>
            <div class="main-chat-details-bottom">

            </div>
            <form action="#" class="chats-bottom <?php echo $startChat; ?>" autocomplete="off">
                <input type="text" name="sender_id" value="<?php echo $sender_id; ?>" class="sender-id" hidden>
                <input type="text" name="reciever_id" value="<?php echo $reciever_id; ?>" class="reciever-id" hidden>
                <textarea name="message" id="typed-message" class="typed-message" placeholder="Type your message here..."></textarea>
                <button type="submit" class="submit-btn msg-chat-btn" title="submit-btn"><img src="assets/imgs/send.png" alt=""></button>
            </form>
        </div>
    </div>
</section>