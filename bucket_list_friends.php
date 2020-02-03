<?php
$HopesAndDreams =[];
echo("Voor hoeveel vrienden wil je hun dromen opslaan?".PHP_EOL);
$hoeveelheid = readline();
for($i=1;$i<=$hoeveelheid;$i++){
    echo("Wat is jouw naam?".PHP_EOL);
    $name = readline();
    echo("Wat is jouw droom?".PHP_EOL);
    $droom = readline();
    $HopesAndDreams[$name]=$droom;
}

foreach($HopesAndDreams as $vriend=>$hoop){
    echo($vriend." heeft als droom: ".$hoop.PHP_EOL);
}

