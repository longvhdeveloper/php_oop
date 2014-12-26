<?php
require('class.email.php');
require('class.extendedemail.php');
require('class.factorial.php');
require('class.wordcounter.php');
require('class.htmlemail.php');
require('class.mysqldriver.php');
require('class.statictester.php');

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

$factorial = new Factorial(5);
$factorial->showResult();


$wordCount = new WordCounter('words.txt');
$wordCount->count(WordCounter::ASC);

$htmlemail = new HtmlEmail('vohoanglong07@gmail.com');
$htmlemail->addReceipients('longheartfree@yahoo.com');
$htmlemail->setSubject('Just for Test');
$htmlemail->setBody('Hi long ! Nice to meet you');
$htmlemail->sendEmail();
$htmlemail->sendHTMLEmail();

echo '----------------------------------------------<br/>';

$emailObject = new Email('vohoanglong07@gmail.com');
$extendedemailObject = new ExtendedEmail();
$htmlemailObject = new HtmlEmail('vohoanglong07@gmail.com');

if ($extendedemailObject instanceof Email) {
    echo 'Extended email is derived from email.<br/>';
}

if ($htmlemailObject instanceof Email) {
    echo 'HtmlEmail is dervied from email.<br/>';
}

if ($htmlemailObject instanceof ExtendedEmail) {
    echo 'HtmlEmail is dervied from ExtendedEmail.<br/>';
}

echo '----------------------------------------------<br/>';
$mysqlDriver = new MysqlDriver();


echo '----------------------------------------------<br/>';
$statictesterObject = new StaticTester();
StaticTester::checkIdFromStaticMethod();

$statictesterObject2 = new StaticTester();
$statictesterObject->checkIdFromNonStaticMethod();
$statictesterObject->checkIdFromStaticMethod();
$statictesterObject2->checkIdFromNonStaticMethod();
$statictesterObject3 = new StaticTester();
StaticTester::checkIdFromStaticMethod();