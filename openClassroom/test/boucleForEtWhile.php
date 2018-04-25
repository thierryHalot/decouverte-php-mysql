<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 25/04/18
 * Time: 09:52
 */

$nombreDeLigne = 0;

//la boucle while s'uttilise quand on ne saispas l'avvance le nombre de fois ou l'on veut itéré
while($nombreDeLigne <= 10){


    echo "cette ligne est recopier tant quelle n'est pas supérieur ou égale à 10<br />" ;

    $nombreDeLigne++;
}



//la boucle for s'uttilise quand on connais le nombre de fois ou l'on souhaite itérer
for($i = 0; $i<= 10; $i++){


    echo 'cette a été recopier '. $i. ' fois<br />';
}