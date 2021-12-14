opdracht 1 
0
 <br/>
opdracht 2 <br/>
 <?php
echo "rayan ouladomar <br>

";
?>
opdracht 3
  <br/>
<?php
$leeftijd = 17;

echo $leeftijd;
echo "<br>";
$melk = 2.05;

echo $melk;
echo "<br>";
$test = true;
$leeftijd = 1;
?>
opdracht 4
<br/>
<?php
echo"1"
?>
<br/>
opdracht 5 <br/>
<?php 
$voornaam = "Tom";
echo gettype($voornaam);
?>
<br/>
opdracht 6  <br/>

<?php
$stringo = "a string of words";
echo gettype($stringo);
?>

<?php
$getall = 2;
echo gettype($getall);
?>

<?php
$getal = 0.23;
echo gettype($getal);
?>

<?php
$test = true;
echo gettype($test);
?>

<?php
$test = null;
echo $test;
echo gettype($test);
?>
<br/>
opdracht 7
<?php
$naam = "rayan";
$leeftijd = 17;
echo "Mijn naam is $naam en ik ben $leeftijd jaar oud";
?>
<br/>
opdracht8
<?php
$voornaam1 = "Rayano";
$voornaam2 = "Kerem";
$voornaam3 = "Sidarta aka THINKCODE";
echo "<li>$voornaam1 </li> <li> $voornaam2</li>  <li>$voornaam3</li>";
?>
<br/>
opdracht9<br/>
<?php
$naam = "rayan";
$leeftijd = 17;
echo " Mijn naam is " . $naam . " en ik ben " . $leeftijd . " jaar oud. ";
?>
opdracht10 <br/>
<?php
$waarde = "<li> item1 . </li>";
$waarde .= "<li> item 2 </li>";
echo $waarde .= "<li> item 3 </li>";
?>
opdracht11</br>
<?php
$waarde = "amk orocpu Amini sikiyim enayi pislik";
var_dump($waarde);
?>
<br/>


<br/>
opdracht12
<?php
$films= ["home alone", "Spiderman", "take 3"];
echo $films[0];
echo "<br>";
echo $films [1];
echo "<br>";
echo $films [2];
echo "<br>";
?>\
<br/>
opdracht 13<br/>
<?php
$myDogNames = [ "motje" , "ilias" , "hamid" ];
echo $myDogNames[0] . "<br>";
echo $myDogNames[1] . "<br>";
echo $myDogNames[2] . "<br><br>" ;

$myDogNames[0] = 'Demitridemarcusbartholomowjuniorthethirdjunior';
echo $myDogNames[0] . "<br>";
echo $myDogNames[1] . "<br>";
echo $myDogNames[2] . "<br>";
?>
<br/>
opdracht 14<br/>
<?php
$myHeroes = ['shazam' , 'mohammedman' , 'bill'];
echo $myHeroes[0] . "<br>";
echo $myHeroes[1] . "<br>";
echo $myHeroes[2] . "<br>";
array_push($myHeroes, 'GT');
print_r($myHeroes);
?>
<br/>
opdracht15<br/>
<?php
$abcGetallen = [ ["a","b","c","d"], [10,56,78,90] ];
echo $abcGetallen[0][0];
echo $abcGetallen[1][1] . "<br>";
echo $abcGetallen[0][2];
echo $abcGetallen[1][3];
?>
<br/>
opdracht16<br/>
<?php
    $coders =  [66,55,77,3,46,21,20,];
    asort ($coders);
    print_r($coders);

    $laag_hoog = [3,21,20,46,66,55,77];
    arsort ($laag_hoog);
    print_r($laag_hoog);
    ?>
    <br/>
    4.1<br/>
    <?php
$getal1= 1;
$getal2 = 4385722945753;
echo $getal1 + $getal2;
?>
<br/>
4.2<br/>
<?php
$getal1 = 10;
$getal1 += 5;
echo $getal1 . "<br>";

$getal1 = 10;
$getal1 -= 5;
echo $getal1 . "<br>";

$getal1 = 10;
$getal1 *= 5;
echo $getal1 . "<br>";


$getal1 = 10;
$getal1 /= 5;
echo $getal1 . "<br>";
?>
<br/>
4.3<br/>
<?php
$getal = 45;
echo $getal++ . "<br>";
echo $getal--;
?>
<br/>
<br/>
5.1
<?php
$test1 = 12;
$test2 = "gewoon tekst";
var_dump($test1 == $test2);
var_dump($test1 === $test2);
var_dump($test1 != $test2);
var_dump($test1 > $test2);
var_dump($test1 < $test2);
var_dump($test1 <> $test2);
var_dump($test1 >= $test2);
var_dump($test1 <= $test2);
?>
<br/>
5.2<br/>
<?php
$test1 = 12;
$test2 = "gewoon tekst";
var_dump($test1 == $test2);
var_dump($test1 === $test2);
var_dump($test1 != $test2);
var_dump($test1 > $test2);
var_dump($test1 < $test2);
var_dump($test1 <> $test2);
var_dump($test1 >= $test2);
var_dump($test1 <= $test2);
?>
<br/>
<br/>
5.3<br/>
<?php
$test1 = 3;
$test2 = 6;

if($test1 === $test2){
    echo "gelijk";
}
else{
    echo "False" . "<br>";
}

if($test1!=$test2){
    echo "Het is ongelijk aan elkaar True" . "<br>";
}
else{
    echo"werkt niet eh G";
}

if($test1===$test2){
    echo "Het is identiek aan elkaar";
}
else{
    echo"jeetje mineetje dit is ook niet identiek False" . "<br>";
}

if($test1>$test2){
    echo "test1 niet groter dan test2";
}
else{
    echo "Muchas gracis afisotros SSSSIIIIUUUUUUUU" . "<br>";
}

if($test1<$test2){
    echo "Test2 is niet kleiner dan test1 True". "<br>";
}
else{
    echo"deze is ook weer False wat jammer";
}

if($test1>=$test2){
    echo "dit is voor de lol";
}
else{
    echo"Het is niet groter of gelijk True" . "<br>";
}

if($test1<=$test2){
    echo "test2 is niet kleiner of gelijk aan test1 True";
}
else{
    echo"Dit is het antwoord lol";
}
?>
<br/>
5.4<br/>
<br/>
<?php
$prod_besteld =25;
if($prod_besteld <10){
    echo $prijs = 1.50;
}
elseif($prod_besteld<20){
    echo $prijs = 1.25;
}
else{
    echo $prijs = 1.00;
}
?>
<br/>
5.5<br/>
<?php
$score = 0;
switch($score){
    case 10;
    echo "Nog even oefenen dan haal je vast alle punten!";
    break;
    case 8;
    echo "Wow bijna alle punten nog  te gaan!";
    break;
    case 6;
    echo "Ga zo door!";                                  
    break;
    case 4;
    echo "Goed bezig, bijna alle punten!";
    break;
    case 2;
    echo "Wow bijna alle punten nog 2 te gaan!";
    break;
    case 0;
    echo "Gefeliciteert je hebt alles gehaald!";
    break;
}
?>
<br/>
5.6<br/>
<?php
$var =12;
$var1 = 10;
if($var < 10 && $var1 > 5){
    echo "het getal zit tussen de 10 en de 5 in" . "<br>";
}
else{
    echo "het getal is groter of kleiner dan tussen de 10 en 5" . "<br>";
}

if($var <10 || $var1 > 5){
    echo "Ik heb eigenlijk nog steeds geen idee wat dit is" . "<br>";
}
else{
    echo"nog steeds weet ik het eigenlijk niet" . "<br>'";
}

if($var <10 xor $var1 > 5){
    echo "1 Van de twee waardes zijn goed als ik het goed heb" . "<br>";
}
else{
    echo "Blijkbaar had ik het fout" . "<br>";
}

if($var <10 != $var1 > 5){
    echo "Ik weet eigenlijk ook niet wat dit is maar er staat een fout in de module we moeten '!' gebruiken maar het is eigenlijk '!=' anders werkt het niet";
}
else{
    echo"Weet nog steeds niet" . "<br>";
}
?>
<br/>
6.1<br/>
<?php
$woordje = "Hallo";
$zinnetje = "Hoi motje";
function zetTweeWoordenAanElkaar($woordje , $zinnetje){
    $heleZin = $woordje . " " . $zinnetje;
    echo $heleZin;
}

zetTweeWoordenAanElkaar($woordje , $zinnetje);
?>
<br/>
6.2<br/>
<?php

function mijnNaamIsGroot(){
    $voorNaam = "rayan";
    $achterNaam = "ouladomar";
    $geheleNaam = $voorNaam . " " . $achterNaam;
    $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
    echo $geheleNaam;
    
}
mijnNaamIsGroot();
?>
<br/>
6.2<br/>
<?php

function mijnNaamIsGroot(){
    $voorNaam = "rayan";
    $achterNaam = "ouladomar";
    $geheleNaam = $voorNaam . " " . $achterNaam;
    $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
    echo $geheleNaam;
    
}
mijnNaamIsGroot();
?>
<br/>
6.3<br/>
<br/>
<?php
function telAlleWoorden(){
    $mooieAuto = "Mijn rode aap is snel";
    echo strlen($mooieAuto);
}

telAlleWoorden();
?><br/>
6.4<br/>
<?php
function geefTienProcent(){
    $koopPrijs = 75;
    $korting = 10;
    $kortingEuro = ($koopPrijs / 100) * $korting;
    return  $koopPrijs - $kortingEuro;
    
}
echo geefTienProcent();
?>
<br/>
7.3<br/>
<?php
        $leeftijd = 12;
        if($leeftijd<18){
            echo "Je hebt geen toegang tot deze website.";
        }
        ?>
        <br/>



