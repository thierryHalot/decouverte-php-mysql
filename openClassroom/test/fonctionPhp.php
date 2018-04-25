<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 25/04/18
 * Time: 13:48
 */


// la fonction strlen retourne la longueur d'une chaine,c'est a dire le nombre de caractère,espace compris !
$phrase = 'Bonjour je suis une longue chaine de caractere!!';

$longueur = strlen($phrase);

echo "la phrase stoquer dans la variable 'longueur' comporte ". $longueur . " caracteres <br/>";

//la fonction str_replace cherche un caractère et le remplace par celui que l'on souhaite


$maVariable = str_replace('e', '3',$phrase);

echo "j'ai remplacer tous les e de la phrase du haut par des 3 : <br /> ". $maVariable . "<br/>";

//la fonction str_shuffle permet de melanger les caractere d'une phrase
$melangeMoi = str_shuffle($phrase);

echo "maintenant je vais melanger les carateres de cette phrases : <br />". $melangeMoi . "<br/>";

//la fonction strtoupper transforme ma phrase en majuscule et strtolower fait l'inverse

$majusculeMoi = strtoupper($phrase);

echo "Si je souhaite que m'a phrase sois tous en majuscule : <br />". $majusculeMoi . "<br />";

//maintenant utilisons la fonction date, comme son nom l'indique elle permet de nous renvoyé la date

//pour avoir juste l'année

$annee = date('Y');

echo "Nous somme en : ".$annee."<br/>";

//pour le jour
$jour = date('d');

echo "le jour d'aujourd'hui : ".$jour."</br>";

$mois = date('m');

echo "le mois d'aujourd'hui : ". $mois."<br>";

$heure = date('H');

echo "Il est ".$heure." heure"."<br />";

$minute = date('i');

echo "et ".$minute." minutes<br />";



// creation d 'une fonction avec pour parametre un nom !!

function direBonjour($nom){

    echo 'Bonjour '.$nom.' !<br />';
};


direBonjour('moi meme !');

//fonction qui calcule le volume d'un cone

function volumeCone($rayon, $hauteur){

    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume

    return $volume;//indique la valeur a renvoyer !!
}

$volume = volumeCone(5,2);

echo "le volume d'un cone de rayon 5 et de hauteur 2 est de ". $volume."<br />";

