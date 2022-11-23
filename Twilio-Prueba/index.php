<?php
// Include the bundled autoload from the Twilio PHP Helper Library
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACfd881f94722355d059f3f2ef89ab08ca';
$auth_token = 'bb801bc48011a2c34f4709d9b16d78b4';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// A Twilio number you own with SMS capabilities
$twilio_number = "+18066666028";
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+51971077591',
    array(
        'from' => $twilio_number,
        'body' => 'Delfosti:Este es un SMS de prueba'
    )
);