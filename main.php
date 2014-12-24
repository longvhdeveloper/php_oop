<?php
require('class.email.php');
require('class.extendedemail.php');
$emailObject = new Email('vohoanglong07@gmail.com');
$emailObject->addReceipients('longheartfree@yahoo.com');
$emailObject->setSubject('Just for Test');
$emailObject->setBody('Hi long ! Nice to meet you');
$emailObject->sendEmail(); 


$extendedemailObject = new ExtendedEmail();
$extendedemailObject->setSender('vohoanglong07@gmail.com');
$extendedemailObject->addReceipients('longheartfree@yahoo.com');
$extendedemailObject->setSubject('Just for Test');
$extendedemailObject->setBody('Hi long ! Nice to meet you');
$extendedemailObject->sendEmail();

