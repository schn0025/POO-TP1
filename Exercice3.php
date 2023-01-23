<?php
// Schneider Arthur
declare(strict_types = 1);

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
    $prix = ($prixKo / 100) * $poids;
    $reduc = 1;
    if ($prix >= 200)
        $reduc = 0.75;
    elseif ($prix >= 100)
        $reduc = 0.85;
    elseif ($prix >= 50)
        $reduc = 0.95;
    return $prix * $reduc;
}
echo calculerRemise(50,100),"\n";
//Question 14

//Question 15
//Question 16
//Question 17
//Question 18