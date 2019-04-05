<?php

namespace Ngeno7\ASTalking;

use AfricasTalking\SDK\AfricasTalking;

class ASTalking
{
    // Build your next great package.

    protected $sms;

    protected $pNumbers = '';

    protected $msg = '';

    public function __construct($username, $key)
    {
        $AT = new AfricasTalking($username, $key);
        
        $this->sms = $AT->sms();
    }

    public function to(array $pNumbers): ASTalking 
    {
        $numbers = array_filter(array_map(function($pNumber) { return trim($pNumber); }, $pNumbers),
         function($pNumber) { return strlen($pNumber) == 12 || strlen($pNumber) == 13 ? true : false; });

        $this->pNumbers = implode(',', $numbers);
 
         return $this;
    }

    public function message(string $message): ASTalking
    {
        $this->msg = $message;

        return $this;
    }

    public function send()
    {
        $this->sms->send([
            'to' => $this->pNumbers,
            'message' => $this->msg,
            'from' => config('astalking.sender_id'),
            'enqueue' => config('astalking.enqueue')
        ]);
    }
}
