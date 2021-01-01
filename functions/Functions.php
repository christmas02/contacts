<?php

namespace functions;

use PDO;


class Functions
{

    public function connect()
    {
        $db = new PDO('mysql:host=localhost;dbname=contacts;charset=UTF8', 'root', 'root');
    }

    public function dump($content)
    {
        echo '<pre>';
        var_dump($content);
        echo '</pre>';
    }

    public function printArray($content)
    {
        echo '<pre>';
        print_r($content);
        echo '</pre>';
    }
}
