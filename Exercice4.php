<?php
// Schneider Arthur
declare(strict_types = 1);
// fonction d'autre EX
function decodeBooleen(bool $boul): string
{
    $rep = "Faux";
    if ($boul)
        $rep = "Vrai";
    return $rep;
}

// Question 19
function creeTableau(int $taille, int $min, int $max ):array 
{
    $tableau= array();
    for ($i = 0; $i < $taille; $i++){
        $nb = rand($min, $max);
        $tableau[$i] = $nb;
    }
    return $tableau;
}
var_dump(creeTableau(10, 5, 20));

// Question 20
function afficheTableau($tab)
{
    echo '[ ';
    for ($i = 0; $i < count($tab); $i++) {
        echo "$tab[$i] ";
    }
    echo "]\n";
}
$tab = creeTableau(10, 5, 20);
afficheTableau($tab);

// Question 21
function calculerMoyenne(array $tab):float
{
    $somme = 0;
    for($i = 0; $i < count($tab); $i++){
        $somme += $tab[$i];
    }
    return $somme / count($tab);
}
echo calculerMoyenne($tab),"\n";

// Question 22
function estPresent(array $tab, int $val):bool
{
    $rep = false;
    for($i = 0; $i < count($tab); $i++){
        if($tab[$i] == $val){
            $rep = true;
        }
    }
    return $rep;
}
$tab1 = creeTableau(10, 0, 10);
afficheTableau($tab1);
echo decodeBooleen(estPresent($tab1,8)),"\n";
echo decodeBooleen(estPresent($tab1,50)),"\n";

// Question 23
function indexOf(array $tab, int $val): int
{
    $rep = -1;
    for ($i = 0; $i < count($tab); $i++) {
        if ($tab[$i] == $val and $rep == -1) {
            $rep = $i;
        }
    }
    return $rep;
}
echo indexOf($tab1, 8), "\n";

// Question 24
function getMaximum(array $tab): int
{
    $rep = $tab[0];
    for ($i = 1; $i < count($tab); $i++) {
        if ($tab[$i] > $rep ) {
            $rep = $tab[$i];
        }
    }
    return $rep;
}
afficheTableau($tab1);
echo getMaximum($tab1), "\n";

// Question 25
function getIndiceMinimum(array $tab): int
{
    $mini = $tab[0];
    for ($i = 1; $i < count($tab); $i++) {
        if ($tab[$i] < $mini ){
            $mini = $tab[$i];
        }
    }
    return indexOf($tab, $mini);
}
echo getIndiceMinimum($tab1), "\n";
// Question 26
function exemple(int $int, float $float, string $str)
{
    $int += 10;
    $float = 0.02;
    $str = "marche";
}
$int = 0;
$float = 25.35;
$str = "tese";
exemple($int, $float, $str);
echo $int, "\n", $float, "\n", $str, "\n";
// les paramètre dit scalaire ne sont pas modifier

// Question 27
function echange(array $tab, int $ind1, int $ind2)
{
    if($ind1 >=0 and $ind1 < count($tab) and $ind2 > 0 and $ind2 < count($tab)){
        echo "tableaux av modif \n";
        afficheTableau($tab);
        $temp = $tab[$ind1];
        $tab[$ind1] = $tab[$ind2];
        $tab[$ind2]= $temp;
        echo "tableaux après modif \n";
    }
    else{
        echo "Une des deux indice ne sont pas dans le tableaux \n";
    }
}
echange($tab1, 5, 9);
echange($tab1, 5, 10);
echange($tab1, -5, 9);