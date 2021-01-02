<?php

function dump($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

try {
    $bdd = new PDO('mysql:host=localhost;dbname=contacts_rene;charset=UTF8', 'root', 'root');
}
catch (Exception $e) {
    die("Erreur :" . $e->getMessage());
}

$moov = [01, 02, 03, 41, 42, 43, 51, 52, 53, 61, 62, 63, 71, 72, 73, 81, 82, 83];
$mtn = [04, 05, 06, 44, 45, 46, 54, 55, 56, 64, 65, 66, 74, 75, 76, 84, 85, 86];
$orange = [07, 05, 06, 47, 48, 49, 57, 58, 59, 67, 68, 69, 77, 78, 79, 87, 88, 89];

$stmnt = $bdd->query("SELECT * FROM mytable1");
$contacts = $stmnt->fetchAll();


foreach ($contacts as $contact){

    $space = " ";
    $nospace = "";
    $number = $contact[33];

    $noSpaceInNumber = str_replace($space, $nospace, $number);

    $numb = strlen($noSpaceInNumber);

    if($numb == 8){


    $number = $contact[33];

    $preNumero = substr($contact[33], 0, 2);

    

    if(in_array($preNumero, $moov)){
        
        echo $newNumber ="01$noSpaceInNumber => <span style='color:green'>moov</span><br> ";
        echo "<hr>";
    } elseif(in_array($preNumero, $mtn)){
            echo $newNumber = "05$noSpaceInNumber => <span style='color:yellow'>mtn</span><br>";
            echo "<hr>";
    }elseif (in_array($preNumero, $orange)) {
            echo $newNumber = "07$noSpaceInNumber => <span style='color:orange'>orange</span><br>";
            echo "<hr>";
        }

    }

}
