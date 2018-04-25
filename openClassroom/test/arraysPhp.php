<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 25/04/18
 * Time: 10:53
 */

//initilisation d'un tableau numeroter
// il permette de stocker les element d'un meme type

echo '<h2>tableau numéroté :</h2>';
$prenom = array ('François', 'Michel', 'Nicole', 'Cedric');

//pour afficher les valeurs du tableaux :
//echo $prenom[0] . '<br/>';
//echo $prenom[1] . '<br/>';
//echo $prenom[2] . '<br/>';
//echo $prenom[3] . '<br/>';



echo "<h5>Utilisation d'une boucle foreach</h5>";
//la boucle foreach est spécialisé dans les tableaux ,
//a chaque iteration elle va stocké la valeur de la ligne
// dans une variable temporaire,ici element;

foreach ($prenom as $element){

    echo $element . '<br />';
};
echo '<h2>tableau associatif :</h2>';

//création d'un tableau associatif
//ils permettent de découper une donné en plusieur sous-element
// les => serve a dire "associé a "
$coordonnees = array(

    'prenom' => 'François',// pour cette exemple nom est la "clé" et françois la "valeur"
    'nom' => 'Dupont',
    'adresse' => '3rue du paradis',
    'ville' => 'Marseille');

//pour afficher la valeur du tableau
//echo $coordonnees['prenom'] . '<br />';
//echo $coordonnees['nom'] . '<br />';
//echo $coordonnees['adresse'] . '<br />';
//echo $coordonnees['ville'] . '<br />';

//cette boucle marche aussi pour les tableaux associatifs
echo '<p>la boucle forech marche aussi :</p>';
foreach ($coordonnees as $element){

    echo $element . '<br/>';
}
echo '<p>On peut récupérer la valeur,mais aussi sa clé :</p>';
//pour récupérer la clé de l'élèment

foreach ($coordonnees as $cle => $element){

    echo '[' . $cle . '] vaut ['. $element . ']<br />';
};

echo "<p>Pour savoir ce que contiens rapidement le contenu d'un tableaux on uttilise 'print_r' a la place 'd'echo',
 cette commande ne renvoi pas de code html comme 'br /' ,c'est pourquoi on uttilise des balise 'pre'</p>";

echo '<pre>';
print_r($coordonnees);
echo '</pre>';

echo "<h2>Rechercher dans un tableau</h2>";

echo "<p>la fonction array_key_exist permet de savoir si une clé exist ou non dans un tableau associatifs</p>>";


// si la clé exist alors on execute le code
if (array_key_exists('toto',$coordonnees)){

    echo 'la clé "nom" se trouve dans les coordonnées !'; //renvoi true


//sinon on execute ce code
}else{

    echo 'on a perdu la clef ,appeller passe partout !!!'; //renvoi false
};

echo "<p>la fonction in_array permet de savoir si une valeur existe ou non, dans un tableaux associatif mais aussi dans un tableau numéroté</p>>";


//si la valeur existe alors on execute le code
if(in_array('françois',$coordonnees)){


    echo "françois est dans mon tableaux de coordonné "; //renvoie true

//si la condition n'est pas remplie on execute ce code
}else{

    echo "françois doit surement etre a la salle de muscu !!"; //renvoi false
};

echo "<p>la fonction array_search permet de renvoyé la clé pour un tableau associatif ou son index pour un tableau numéroter</p>>";


$position = (array_search('François',$coordonnees));

echo "François se trouve dans ". $position;