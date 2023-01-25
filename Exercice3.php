<?php
// Schneider Arthur
declare(strict_types = 1);
// fonction d'autre ex
function decodeBooleen(bool $boul): string
{
    $rep = "Faux";
    if ($boul)
        $rep = "Vrai";
    return $rep;
}

//Question 11
/*
== compart les valeurs (egale)
=== compart les valeurs et les types (egale)
!= compart les valeurs (diff)
!== compart les valeurs et les types (diff)
< compart les valeursv (inferieur)
> compart les valeurs (superieur)
>= compart les valeurs (superieur ou egale)
<= compart les valeurs (inferieur ou egale)
*/

//Question 12
/*
&& comme le and
and vrai si les deux vrai
|| comme le or
or vrai si l'un des deux vrai
xor vrai si l'un des deux vrai mais pas les deux
! true ci la var suivant est false (comme le not)
*/

//Question 13
function calculerRemise(float $prixKo, float $poids): float
{
    $prix = $prixKo * ($poids / 1000);
    $reduc = 1;
    if ($prix >= 200)
        $reduc = 0.75;
    elseif ($prix >= 100)
        $reduc = 0.85;
    elseif ($prix >= 50)
        $reduc = 0.95;
    return $prix * $reduc;
}
echo calculerRemise(50,1000),"\n";

//Question 14
function estBissextile(int $annee): bool
{
    $rep = false;
    if (($annee % 4 == 0 and $annee % 100 != 0) or $annee % 400 == 0)
        $rep = true;
    return $rep;
}
echo decodeBooleen(estBissextile(2020)), "\n";

//Question 15
function auMoinsDeuxVrais(bool $b1,bool $b2,bool $b3):bool
{   
    $rep = False;
    if (($b1 && $b2) || ($b1 && $b3) || ($b2 && $b3))
        $rep = True;
    return $rep;
}
echo decodeBooleen(auMoinsDeuxVrais(True,True,False)),"\n";
echo decodeBooleen(auMoinsDeuxVrais(False,True,False)),"\n";
echo decodeBooleen(auMoinsDeuxVrais(false, True, true)), "\n";
echo decodeBooleen(exactementDeuxVrais(true, True, true)), "\n";

//Question 16
function exactementDeuxVrais(bool $b1,bool $b2,bool $b3):bool
{
    $rep = False;
    if (($b1 && $b2) || ($b1 && $b3) xor ($b2 && $b3))
        $rep = True;
    return $rep;
}
echo decodeBooleen(exactementDeuxVrais(True,True,False)),"\n";
echo decodeBooleen(exactementDeuxVrais(False,True,False)),"\n";
echo decodeBooleen(exactementDeuxVrais(false, True, true)), "\n";
echo decodeBooleen(exactementDeuxVrais(True, True, True)), "\n";
echo decodeBooleen(exactementDeuxVrais(false, false, false)), "\n";

//Question 17
function saisieReponse(): string
{   
    $msg = "la reponse est Oui ou Non?";
    $rep = readline($msg);
    while (strtoupper($rep) != "OUI" and $rep != "NON")
        $rep = readline($msg);
    return $rep;
}
echo saisieReponse(), "\n";

//Question 18
function dessinerRectanglePlein(string $motif, int $nbLigne, int $nbCol)
{
    for($i=0; $i <=$nbLigne; $i++){
        for($y=0; $y <= $nbCol; $y++){
            echo $motif," ";
        }
        echo "\n";
    }
}
dessinerRectanglePlein("+" ,10,10);