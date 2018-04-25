<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 24/04/18
 * Time: 22:56
 */
$age = 8;
$autorisation_entrer = false;
$note = 15;



//si l'age est supérieur ou égale a 12 alors on execute le code
if ($age <= 12){

    echo 'Salut gamin !<br/>';

// sinon si l'age est compris entre 12 et 18 alors on execute le code
}elseif ($age > 12 && $age <= 18){

    echo "salut l'ado !!<br/>";

//sinon
}else{

    echo ('Ceci est un sit pour les moin de 18 ans, Au revoir !<br />');
}
//si la condition vaut rue alors on execute le code

if ($autorisation_entrer){

    echo 'bienvenue sur le site<br/>';
}else{

    echo 'you should not pass !!<br />';
}

//switch nous permet d'évaluer une condition au cas par cas
switch($note){

    case 0: //dans le cas ou $note vaut 0

        echo "tu a besoin vraiment de revoir ton cour<br/>";
    break;

    case 5: //dans le cas ou $note vaut 5

        echo  "bof<br />";
        break;

    case 10: //dans le cas ou $note vaut 10

        echo  "tu a pile poil la moyenne<br />";
        break;

    case 15: // dans le cas ou note vaut 15 etc..

        echo "tres bonne note !!<br />";
        break;

    case 20:

        echo  "note maximale !!<br />";
        break;

        //dans le cas ou on rentre dans aucune des condition plus haut
    default:

        echo "je n'ai aucun message à afficher pour cette note !!<br />";
}