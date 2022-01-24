<?php
function geefTienProcent(){
    $koopPrijs = 55;
    $korting = 10;
    $kortingEuro = ($koopPrijs / 100) * $korting;
    return  $koopPrijs - $kortingEuro;
    
}
echo geefTienProcent();