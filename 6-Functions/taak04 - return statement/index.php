<?php 
function geefTienProcent(){
    $koopPrijs = 75;
    $korting = 0.90;
    $bedrag = $koopPrijs * $korting;
    return $bedrag;
}

echo geefTienProcent();

?>