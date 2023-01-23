<?php
declare(strict_types = 1);

// question 1
echo "Schneider Arthur \n" ;

/* question 2 
Les types de données correspondantes sont :
entier : int
réel : float
chaîne de caractère : string
*/

$entier = 25;
$reel = 2.5;
$chaine = "coucou";
$chaine2 = (string) "10";

// question 3
// $somme = $entier + $reel + $chaine;
$somme2 = $entier + $reel + $chaine2;
// echo $somme;
echo $somme2, "\n";
/* 
je constate qu'il y a une erreur car on veux additionner un réel avec une chaîne 
Ce qui ne peut être convertie car il ne s'agit pas d'une valeur numérique ce qui n'est 
pas le cas dans la somme2. Dans ce cas chainé2 et considérait comme un réel.
*/

// question 4
$string1 = 'coucou \n';
$string2 = "coucou \n";
echo $string1, "\n";
echo $string2;
// la variable avec '' ne prend pas en compte les \.

// question 5
$string1 = "52";
$string2 = "coucou";
// $somme = $string1 + $string2;
// echo $somme, "\n";
// je constate que les deux ne peuvent pas être convertie
$somme2 = $string1 . $string2;
echo $somme2, "\n";
// dans ce cas je constate que les chaine a été concaténer et non additionner.

// question 6
$entier = 5;
$string1 = '$entier \n';
$string2 = "$entier \n";
echo $string1, "\n";
echo $string2;
/* je constate qu'avec les "" la variable est pris pour une variable ce qui n'est 
pas le cas avec '' qui ne prend pas le contenu mais le nom de la variable.
Ci l'on ajoute \n dans '' il est écrit en clair ce qui n'est as le cas avec les "".
*/
