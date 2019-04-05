<?php

/*
 * sms config
 * 
 */
return [
    'username' => env('ASTALKING_USERNAME', ''), // your application name on ASTalking dashboard
    'key' => env('ASTALKING_KEY', ''), // api key provided
    'sender_id' => env('ASTALKING_SENDERID', ''), // Sender ID or short code
    'enqueue' => env('ASTALKING_ENQUEUE', true) // true or false
];