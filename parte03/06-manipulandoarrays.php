<?php

echo "\n";
echo " iniciando manipulação do array";
echo "\n";

sleep(4);

$ar_joao = @array();

$ar_joao[] = "teste00";
$ar_joao[] = "teste01";
$ar_joao[] = "teste02";
$ar_joao[] = "teste03";
$ar_joao[] = "teste04";
$ar_joao[] = "teste05";

print_r($ar_joao);

echo "\n";
echo " finalizado manipulação do array";
echo "\n";

sleep(2);

echo "\n";
echo " inicindo foreach..";
echo "\n";
sleep(4);

foreach($ar_joao as $item){

echo $item  . "\n";
}

echo "\n";
echo " foreach finalizado.";
echo "\n";











