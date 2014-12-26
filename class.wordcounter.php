<?php
class WordCounter
{
    const ASC = 1;
    const DESC = 2;
    private $words;

    public function __construct($fileName)
    {
        $fileContent = file_get_contents($fileName);
        $this->words = array_count_values(
            str_word_count(
                strtolower($fileContent),
                1
            )
        );
    }

    public function count($order)
    {
        if ($order == self::ASC) {
            asort($this->words);
        } elseif ($order == self::DESC) {
            arsort($this->words);
        }
        foreach ($this->words as $key => $val) {
            echo $key . ' = ' . $val . '<br/>';
        }
    }
}
