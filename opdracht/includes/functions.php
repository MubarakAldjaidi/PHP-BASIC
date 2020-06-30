<?php

    $fruits = array(
        "1"=> ['meloen', 'prijs'=> 1.99], "2"=> ['peren(1kg)', 'prijs'=> 2.50],
        "3"=> ['appels (3kg)', 'prijs'=> 1.20], "4"=> ['Bananen', 'prijs'=> 2.40],
        "5"=> ['Perzik ', 'prijs'=> 2.00], "6"=> ['lemoen(p.s)', 'prijs'=> 0.60],
        "7"=> ['mango', 'prijs'=> 1.46], "8"=> ['pruimen', 'prijs'=> 0.66],
        "9"=> ['citroen', 'prijs'=> 2.70], "10"=> ['Druiven', 'prijs'=> 1.09]
    );
    

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
}


function getProductNr()
{       
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
    
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function getKorting(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';

   switch($leeftijd) {
        case 20:
        echo 0.20 . "cent";
        break;
        case 19:
        echo 0.19 . "cent";
        break;
        case 18:
        echo 0.18 . "cent";
        break;
        case 17:
        echo 0.17 . "cent";
        break;
        case 16:
        echo 0.16 . "cent";
        break;
        case 15:
        echo 1 . "euro";
        break;
        case 14:
        echo 1 . "euro";
        break;
        case 13:
        echo 1 . "euro";
    }
}


function getTotaal() {
    global $fruits;

    if (isset($_GET['productnummer']) && isset($_GET['aantal'])) {
        if(isset($fruits[$_GET['productnummer']])) {
            echo $fruits[$_GET['productnummer']]['prijs'] * $_GET['aantal'];
        }
    }
}
?>