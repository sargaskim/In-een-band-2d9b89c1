<?PHP
$computter = "Het albumoverzicht:".PHP_EOL;


$albums["Citizen of Glass"] = 4.5;
$albums["Night"] = 9;
$albums["New Eyes"] = 5;
$albums["Strange Trails"] = 10;


echo $computter;
foreach ($albums as $naam => $prijs){ 
    echo $naam. " kost €". $prijs.PHP_EOL;
}

echo "Het totaalbedrag van alle albums is €28,50" .PHP_EOL;
echo " De gemiddelde prijs van alle albums is €€7.125" .PHP_EOL;
?>