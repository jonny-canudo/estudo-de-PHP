<?php

echo "\n";
echo "  iniciando programa...";
sleep(01);

echo "\n";
echo "  salvando parametros...";
$item1 = $argv[1];
$item2 = $argv[2];
sleep(01);
echo "\n";

echo "\n";
echo "  executando laço for...";
echo "\n";

for ($i = 1; $i <= $item1; $i++) {
sleep(01);
echo "  $i =>$item2." . "\n";
}

echo "\n";
echo "  finalizado for...";
echo "\n";

echo "\n  executando laço while...\n";

$j = 1;
while ($j <= $item1) {
sleep(1);
echo "  $j => $item2." ."\n";
$j = $j + 1;
}

echo "\n  finalizado while...\n";

echo "\n  executando laço foreach... \n";

foreach($argv as $joao) {
   echo "  => $joao\n";
}


echo "\n  finalizado foreach...\n";




echo "\n";
echo "  programa finalizado...";
echo "\n";
?>

