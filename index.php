<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require "./classes/Habitation.php";
require "./classes/Maison.php";
require "./classes/Appartement.php";

// instances de maison

$oneHouse = new Maison("France", "Fourmies", 59610, 4, 8, true, 2, true);
    echo $oneHouse->getPays(). "<br>";
    echo $oneHouse->getVille(). "<br>";
    echo $oneHouse->getCodePostal(). "<br>";
    echo $oneHouse->getChambres(). "<br>";
    echo $oneHouse->getPieces(). "<br>";
    echo $oneHouse->isJardin(). "<br>";
    echo $oneHouse->getEtages(). "<br>";
    echo $oneHouse->isGarage(). "<br>";
    echo "<br>";
    echo "J'habite en ". $oneHouse->getPays(). ", dans la ville de " .$oneHouse->getVille(). " qui a pour code postale "
        .$oneHouse->getCodePostal();

echo "<br><br>";

$twoHouse = new Maison("Etats-Unis", "New-York",10005,3,6,false,1,true);
    echo $twoHouse->getPays(). "<br>";
    echo $twoHouse->getVille(). "<br>";
    echo $twoHouse->getCodePostal(). "<br>";
    echo $twoHouse->getChambres(). "<br>";
    echo $twoHouse->getPieces(). "<br>";
    echo $twoHouse->isJardin()."<br>";
    echo $twoHouse->getEtages(). "<br>";
    echo $twoHouse->isGarage(). "<br>";

echo "<br><br>";
// instance de Appartement

$appt = new Appartement("France", "Anor",59186, 2,3,true);
    echo $appt->getPays(). "<br>";
    echo $appt->getVille(). "<br>";
    echo $appt->getCodePostal(). "<br>";
    echo $appt->getChambres(). "<br>";
    echo $appt->getPieces(). "<br>";
    echo $appt->isGarage(). "<br>";

    echo $appt->setPays("France"). "<br>";
    echo $appt->setVille("Anor"). "<br>";
    echo $appt->setCodePostal(59186). "<br>";
    echo $appt->setChambres(2). "<br>";
    echo $appt->setPieces(3). "<br>";
    echo $appt->setGarage(true). "<br>";