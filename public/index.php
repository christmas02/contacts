<?php

// use functions\Functions;
// require '../vendor/autoload.php';
// $connect = new Functions();
require 'functions.php';

$stmnt = $db->query("SELECT * FROM contacts");
$contacts = $stmnt->fetchAll();

$moov   = ['01', '02', '03', '41', '42', '43', '51', '52', '53', '61', '62', '63', '71', '72', '73', '81', '82', '83',];
$mtn    = ['04', '05', '06', '44', '45', '46', '54', '55', '56', '64', '65', '66', '74', '75', '76', '84', '85', '86',];
$orange = ['07', '08', '09', '47', '48', '49', '57', '58', '59', '67', '68', '69', '77', '78', '79', '87', '88', '89',];

foreach ($contacts as $contact) {

    $numberWithoutSpace = str_replace(' ', '', $contact[32]);

    $lengths = strlen($numberWithoutSpace).'<br>';

if ($lengths == 8) {
        // echo $numberWithoutSpace.'<br>';
    
    $firstIndexs = substr($numberWithoutSpace, 0, 2).'<br>'; 

    if ($firstIndexs == 02) {
        // echo $numberWithoutSpace.'<br>';

        $newNumber = str_replace(' '.$numberWithoutSpace, '01.$numberWithoutSpace', $numberWithoutSpace);
        echo $newNumber . '<br>';
    }


    // $tab = array($firstIndexs);

    // for ($i=0; $i < $tab.length; $i++) { 
    //    if(in_array($tab[$i], $moov)){
    //        echo $numberWithoutSpace;
    //    }
    // }

   //dump($tab);



}

}


