<?php
echo "hoeveel vrienden zal ik vragen om hun droom?".PHP_EOL;
$aantal = readline();

$array = array();
for ($i = 1; $i <= $aantal; $i++) {
    echo "wat yo name".PHP_EOL;
    $namen = readline();
    echo "hoeveel dromen wil je opgeven".PHP_EOL;
    $aantalDromen = readline();
    $x = [];
    for ($q = 1; $q <= $aantalDromen; $q++) {
    echo "wat is je droom?".PHP_EOL;
    $droom =readline();
    $x []= $droom;
    }

    $array [$namen] = $x;
}
foreach ($array as $namen => $gather){
    foreach ($gather as $gather => $summ){
        echo "$namen. heeft dit als droom: $summ".PHP_EOL;
    }
}


//KUT kanus homo opdracht