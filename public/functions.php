<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=contacts;charset=UTF8', 'root', '');
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

function dump($content){
    echo '<pre>';
    var_dump($content);
    echo '</pre>';
}
function printArray($content){
    echo '<pre>';
    print_r($content);
    echo '</pre>';
}

function foreachData($contents, $content, $value = null){
    foreach ($contents as $content) {
        echo "$content[$value] <br> ";
    }
}

