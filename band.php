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
$totaalAlbum = count($albums);

$totaal = $albums["Citizen of Glass"] + $albums["Night"] + $albums["New Eyes"] + $albums["Strange Trails"];
$gemiddelde = $totaal / $totaalAlbum;

echo "Het totaalbedrag van alle albums is €". $totaal .PHP_EOL;
echo " De gemiddelde prijs van alle albums is ". $gemiddelde .PHP_EOL;
?>