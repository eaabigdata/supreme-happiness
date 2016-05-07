/**
 * Kandy.io Chat Messages Demo
 * View this tutorial and others at https://developer.kandy.io/tutorials
 */

// Variables for logging in.
var projectAPIKey = "DAK8807ddcc55dd4fb3af3c76f8dc2ea483";
var username = "user1";
var password = "1providentharumbl1";

// Setup Kandy to receive messages.
kandy.setup({
    listeners: {
        message: onMessageReceived
    }
});

kandy.login(projectAPIKey, username, password, onLoginSuccess, onLoginFailure);

// What to do on a successful login.
function onLoginSuccess() {
    log("Login was successful.");
}

// What to do on a failed login.
function onLoginFailure() {
    log("Login failed. Make sure you input the user's credentials!");
}

// Utility function for appending messages to the message div.
function log(message) {
    document.getElementById("messages").innerHTML += "<div>" + message + "</div>";
}

// Gathers the user's input and sends a message to the recipient.
function sendMessage() {
    // var recipient = document.getElementById("recipient").value;
    var recipient = 'user2@eaabigdata.gmail.com';
    var message = document.getElementById("messageBox").value;

    document.getElementById("messageBox").value = "";

    kandy.messaging.sendIm(recipient, message, onSendSuccess, onSendFailure);
}

// What to do on a successful send message.
function onSendSuccess(message) {
    // Display the message as outgoing.
    var recipient = message.destination.split("@")[0];
    // Create the message element. Use Lodash to escape the message for security purposes. lodash is not working for me
    var element = "<div>Outgoing (" + recipient + "): " + message.message.text + "</div>";
    document.getElementById("chat-messages").innerHTML += element;
}

// What to do on a failed send message.
function onSendFailure() {
    log("Send Message failed.");
}

/**
 * Called when the `message` event is triggered.
 * Receives the message object as a parameter.
 */
function onMessageReceived(message) {
    // Display the message as incoming.
    var sender = message.sender.user_id;
    // Create the message element. Use Lodash to escape the message for security purposes. Not escaping because not sure how to implement lodahs
    var element = "<div>Incoming (" + sender + "): " + message.message.text + "</div>"
    document.getElementById("chat-messages").innerHTML += element;
}

