<?php
// Get the raw POST data
$data = file_get_contents('php://input');

// Parse the JSON data
$jsonData = json_decode($data, true);

// Handle the incoming message
if (isset($jsonData['entry'][0]['changes'][0]['value']['messages'][0])) {
    $message = $jsonData['entry'][0]['changes'][0]['value']['messages'][0];
    $sender = $message['from'];
    $text = $message['text']['body'];

    // Process the message and generate a response
    $response = "You said: " . $text;

    // Send the response using WhatsApp Business API (replace with your API logic)
    sendWhatsAppMessage($sender, $response);
} else {
    // Handle invalid or unexpected data
    error_log("Invalid WhatsApp webhook data received");
}

function sendWhatsAppMessage($recipient, $message) {
    // Replace with your WhatsApp Business API integration logic
    // Typically involves creating a POST request with the message content
    // and recipient information
}
