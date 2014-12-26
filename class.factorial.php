<?php
class Factorial
{
    private $result = 1;
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
        for ($i = 2; $i <= $number; $i++) {
            $this->result *= $i;
        }

        echo '__construct execute<br/>';
    }

    public function Factorial()
    {
        $this->number = $number;
        for ($i = 2; $i <= $number; $i++) {
            $this->result *= $i;
        }
        echo 'Factorial execute()<br/>';
    }

    public function showResult()
    {
        echo "Factorial of {$this->number} is {$this->result}<br/>";
    }


    public function __destruct()
    {
        echo 'Object destroyed.';
    }
}
