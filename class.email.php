<?php
class Email
{
    private $sender;
    private $receipients;
    private $subject;
    private $body;

    public function __construct($sender)
    {
        $this->sender = $sender;
        $this->receipients = array();
    }
    
    public function addReceipients($receipient)
    {
        array_push($this->receipients, $receipient);
    }

    public function setSubject($subject)
    {
        
    }
    
}
