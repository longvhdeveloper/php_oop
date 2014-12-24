<?php
class ExtendedEmail extends Email
{
    function __construct()
    {
        parent::__construct();
    }

    public function setSender($sender)
    {
        $this->sender = $sender;
    }
}
