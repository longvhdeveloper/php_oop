<?php
class StaticTester
{
    private static $id = 0;

    public function __construct()
    {
        self::$id++;
    }

    public static function checkIdFromStaticMethod()
    {
        echo 'Current Id From Static Method is : ' . self::$id . '<br/>';
    }

    public static function checkIdFromNonStaticMethod()
    {
        echo 'Current Id From Non Static Method is : ' . self::$id . '<br />';
    }
}