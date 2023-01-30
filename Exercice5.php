<?php
// Schneider Arthur
declare(strict_types = 1);

//question 28
$tableau = array ("un", "deux", "trois", "quatre");
for ($i = 0; $i < count($tableau); $i++){
    echo "$i-$tableau[$i] \n";
}
foreach ($tableau as $elt){
    echo "$elt \n";
}
// on a pas accés au clée du tableau

foreach ($tableau as $cle => $elt){
    echo "$cle-$elt \n";
}
// $tableau corespond au tableau
// $cle est le parcout d'indice dans le tableau
// $elt corespond a l'element d'indice $cle

//question 29
$tableau2 = array(1 => "un", "deux", "trois", "quatre"); 

for ($i = 0; $i < count($tableau2); $i++){
    echo "$i-$tableau2[$i] \n";
}
foreach ($tableau2 as $elt){
    echo "$elt \n";
}

foreach ($tableau2 as $cle => $elt) {
    echo "$cle-$elt \n";
}
// au cle - 1 car les clé vont de 1 a 4 est les indice de 0 a 3

//question 30
$jours = array(1 => "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
foreach ($jours as $cle => $elt) {
    echo "$cle-$elt \n";
}
function determineJour(int $nbJour, array $jours)
{
    if($nbJour > 0 and $nbJour < 8){
        echo "jour $nbJour-$jours[$nbJour]\n";
    }
}
for($i=0;$i<=10;$i++){
    determineJour($i, $jours);
}

//question 31
$week = array("lundi" => "Monday", "mardi" =>"Tuesday", "mercredi" =>"Wednesday", "jeudi" =>"Thursday", "vendredi" =>"Friday", "samedi" =>"Saturday", "dimanche" =>"Sunday");
function traduitEnAnglais(string $jourFr, array $jours):string
{
    $rep = "Unknown";
    foreach ($jours as $cle => $trad) {
        if ($jourFr == $cle) {
            $rep = $trad;
        }
    }
    return $rep;
}
echo traduitEnAnglais("mardi", $week),"\n";

function traduitEnFrancais(string $jourAng, array $jours):string
{
    $rep = "Unknown";
    foreach ($jours as $cle => $trad) {
        if ($jourAng == $trad) {
            $rep = $cle;
        }
    }
    return $rep;
}
echo traduitEnFrancais("Wednesday", $week),"\n";
