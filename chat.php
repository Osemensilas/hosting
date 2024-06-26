<?php

include 'assets/php/config.php';

include 'assets/php/client.php';

$noChat = 'active';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Assistance</title>
    <link rel="stylesheet" href="assets/css/chat.css">
    <link rel="icon" href="assets/imgs/ossil.png">
</head>

<body>
    <section id="chat-assistance">
        <div class="chat-assistance">
            <div class="chat-assistance-top">
                <div class="go-back-container">
                    <img src="assets/imgs/back (2).png" alt="" class="go-back">
                </div>
                <div class="chat-assistance-person-container">
                    <p>Ossilhost Assistant</p>
                    <img src="assets/imgs/live-chat.png" alt="">
                </div>
            </div>
            <div class="chat-assitance-bottom">
                <div class="bottom-chats">
                    <div class="no-chat-yet <?php echo $noChat; ?>">
                        <p>Begin chat with our customer care representative.</p>
                    </div>
                    <div class="sender-container active">
                        <div class="sender-column">
                            <div class="message-container">
                                <p>Hello</p>
                            </div>
                        </div>
                        <div class="reciever-column">
                            <div class="message-container">
                                <img src="assets/imgs/live-chat.png" alt="">
                                <p>Hi</p>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="chats-bottom">
                        <input type="text" name="sender_id" value="<?php echo $sender_id; ?>" class="sender-id" hidden>
                        <input type="text" name="reciever_id" value="<?php echo $reciever_id; ?>" class="reciever-id" hidden>
                        <textarea name="message" id="typed-message" class="typed-message" placeholder="Type your message here..."></textarea>
                        <input type="submit" class="submit-btn" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/chat.js"></script>
</body>

</html>