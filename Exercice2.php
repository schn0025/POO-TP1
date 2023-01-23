<?php
// Schneider Arthur
declare(strict_types = 1);

// Qestion 7
function afficheNomPrenom(string $nom, string $prenom)
{
    echo "$nom $prenom \n";
}

$nom = "schneider";
$prenom = "Arthur";
afficheNomPrenom($nom, $prenom);

// question 8
function calculSomme(int $i1, int $i2, int $i3): int
{
    return ($i1 + $i2 + $i3);
}
echo calculSomme(1, 3, -1 ), "\n";

// question 9
function getAge(): int
{
    $prompt = "indiquez ici votre age";
    return (int) readline($prompt );
}
echo getAge(), "\n";

// question 10
function plusGrand(int $min, int $max): bool
{
    $nb1 = rand($min, $max);
    $nb2 = rand($min, $max);
    echo $nb1,"\n", $nb2, "\n";
    $rep = False;
    if ($nb1 > $nb2)
        $rep = True;
    return $rep;
}
function decodeBooleen(bool $boul): string
{
    $rep = "Faux";
    if ($boul)
        $rep = "Vrai";
    return $rep;
}
echo decodeBooleen(plusGrand(0, 10)),"\n";