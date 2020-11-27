<?php
function mijnNaamIsGroot(){
    $voornaam = 'Niels';
    $achternaam = ' Rewijk';
    $helenaam = "Mijn naam is $voornaam $achternaam";
    $helenaam = strtoupper($helenaam);
    echo $helenaam;
}
echo mijnNaamIsGroot()

?>