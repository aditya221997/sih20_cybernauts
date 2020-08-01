<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../vendor/autoload.php';
$basic  = new \Nexmo\Client\Credentials\Basic('613a59cb', 'gjnme8XsCjPpwwH4');
$client = new \Nexmo\Client($basic);

try {
   $message = $client->message()->send([
    'to' => '917857832448',
    'from' => 'Vonage APIs',
    'text' => 'Hello from Vonage SMS API'
]);
    $response = $message->getResponseData();

    if($response['messages'][0]['status'] == 0) {
        echo "The message was sent successfully\n";
    } else {
        echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
    }
} catch (Exception $e) {
    echo "The message was not sent. Error: " . $e->getMessage() . "\n";
}

