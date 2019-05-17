<?php 

function calcul_ean($ean)
{
    // On crée les variables 
    // On calcule le nombre de caractères 
    $length = strlen($ean);
    $i = 0;
    $total = 0;

    // Étape 1: Calcul d'une somme 
    while($i < $length) 
    {
        if($i % 2 )
        {
            $number = $ean[$i] * 3; 
        }
        else 
        {
            $number = $ean[$i];
        }
        $i++;
    
        $total = $total + $number;
    }

    // Étape 2: Calcul de la clé 
    while($total >= 10)
    {
        $total = $total - 10; 
    }
    
    if($total === 0) 
    {
        return $total; 
    }
    else
    {
        $total = 10 - $total; 
        return $total; 
    }
}