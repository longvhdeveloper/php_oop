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
       $this->subject = $subject; 
    }
    
    public function setBody($body)
    {
        $this->body = $body;
    }

    public function sendEmail()
    {
        foreach ($this->receipients as $receipient) {
            $result = mail(
                $receipient,
                $this->subject,
                "From: {$this->sender}\r\n"
            );

            if ($result) {
                echo "Mail successfully send to {$receipient} <br/>";
            }
        }
    }
}
