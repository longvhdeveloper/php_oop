<?php
class HtmlEmail extends Email
{
    public function __construct($sender)
    {
        parent::__construct($sender);
    }
    public function sendHTMLEmail()
    {
        foreach ($this->receipients as $receipient) {
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf8' . "\r\n";

            $headers .= "From : {$this->sender} \r\n";
            $result = mail($receipient, $this->subject, $headers);
            if ($result) {
                echo 'HTML Mail successfully sent to ' . $receipient . '<br/>';
            }
        }
    }
}