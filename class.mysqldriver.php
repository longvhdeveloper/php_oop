<?php
require('interface.dbdriver.php');
require('abstract.reportgenerator.php');
class MysqlDriver extends ReportGenerator implements DBDriver
{
    public function connect()
    {
        //to do
    }

    public function execute($sql)
    {
        //to do
    }

    public function connectDB()
    {
        //to do
    }
}