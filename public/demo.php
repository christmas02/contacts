<?php

require 'functions.php';


$moov   = [01, 02, 03, 41, 42, 43, 51, 52, 53, 61, 62, 63, 71, 72, 73, 81, 82, 83];
$mtn    = [04, 05, 06, 44, 45, 46, 54, 55, 56, 64, 65, 66, 74, 75, 76, 84, 85, 86];
$orange = [07, 05, 06, 47, 48, 49, 57, 58, 59, 67, 68, 69, 77, 78, 79, 87, 88, 89];

$stmnt = $db->query("SELECT * FROM contacts");
$contacts = $stmnt->fetchAll();

$insert = $db->prepare("");
$insert->execute(compact('Phone 1 - Value'));


foreach ($contacts as $contact){

    $space = " ";
    $nospace = "";
    $number = $contact[32];

    $noSpaceInNumber = str_replace($space, $nospace, $number);

    $numb = strlen($noSpaceInNumber) . '<br>';

    if($numb == 8){

    $number = $contact[32];

     $preNumero = substr($contact[32], 0, 2);


    if(in_array($preNumero, $moov)){
        echo $lastNumber = substr($noSpaceInNumber, 0, 8).' devient -> ';
        echo $newNumber ="01$noSpaceInNumber (<span style='color:green'>moov</span>)<br>";
        echo "<hr>";
    } elseif(in_array($preNumero, $mtn)){
            echo $lastNumber = substr($noSpaceInNumber, 0, 8). ' devient -> ';
            echo $newNumber = "05$noSpaceInNumber (<span style='color:#f1c40f'>mtn</span>)<br>";
            echo "<hr>";
    }elseif (in_array($preNumero, $orange)) {
            echo $lastNumber = substr($noSpaceInNumber, 0, 8). '  devient -> ';
            echo $newNumber = "07$noSpaceInNumber (<span style='color:orange'>orange</span>)<br>";
            echo "<hr>";
        }
    }

}
