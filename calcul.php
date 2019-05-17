<?php 
include('function.php'); 
include('view.html');


if(isset($_POST['submit']))
{
    $ean= addslashes($_POST['ean']); 

    // On vérifie que la suite est numérique 
    if(is_numeric($ean))
    {
        // On appelle la function 
        $result = calcul_ean($ean); 
        // On affiche le résultat 
        echo "La clé de l'ean " . $_POST['ean'] . " est " . $result;
    }
    else 
    {
        echo "La suite n'est pas numérique, merci de réessayer"; 
    }

}

