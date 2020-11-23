<?php

/**
 * @param Int $width
 * @return Int $count
 */
function manual_input(Int $width): Int
{
    $count = 0;
    echo "Tapez la 1ere altitude:  ";
    $max = intval(readline());
    for ($i = 1; $i < $width; $i++) {
        echo "Tapez une altitude:  ";
        $value = intval(readline());
        if ($value < $max) {
            $count++;
        } else {
            $max = $value;
        }
    }
    return $count;
}


/**
 * @return Int $count
 */
function useExemple ():Int {
    $tab = [30, 27, 17, 42, 29, 12, 14, 41, 42, 42];
    $width = 10;
    $count = 0;
    $max = $tab[0];
    for ($i = 1; $i < $width; $i++) {
        if ($tab[$i] < $max) {
            $count++;
        } else {
            $max = $tab[$i];
        }
    }
    return $count;
}

/**
 * @param Int $width
 * @return Int $count
 */
function randValue ($width): Int {
    $max = rand(1, 100000);
    echo "les altitues sont : [ $max";
    $count = 0;
    for ($i = 0; $i < $width; $i++) {
        $randValue = rand(1, 100000);
        if ($randValue < $max) {
            $count++;
        } else {
            $max = $randValue;
        }
        echo ", $randValue ";
    }
    echo "]\n\r";
    return $count;
}

//Main 
echo "
Test Globalis \n\r
";

echo "
############################################################
#    Veuillez chsoisir le choix qui vous convient          #     
#    Tapez 1 si vous voulez entrer vos propre données      #     
#    Tapez 2 si vous voulez  avec l'exemple du sujet       #     
#    tapez 3 si vous voulez donner aléatoires              #
############################################################

Faites votre choix : \n\r
";


$choix = readline();
while ($choix != 3 and $choix != 2 and $choix != 1) {
    echo("Vous avez fait le mauvais choix");
    $choix = readline();
}

switch ($choix) {
    case 1:
        echo "\nla surface d'abri disponible est : " .manual_input(askForWidth());
        break;
    case  2:
        echo "\nla surface d'abri disponible est : " .useExemple();
        break;
    case 3:
        echo "\nla surface d'abri disponible est : ". randValue(askForWidth());
        break;
}

/**
 *
 * @return Int $width
 */
function askForWidth(): Int
{
    echo "
Saisissez la largeur du continent (la largeur doit etre entre 1 et 100 000):\n\r
";
    $width = intval(readline());
    while ($width > 100000 || $width <= 0) {
        echo("Veuillez saisir un entier entre 1 et 100 000:\n\r");
        $width = intval(readline());
    }
    return $width;
}

?>