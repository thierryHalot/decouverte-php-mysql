<?php
/**
 * Created by PhpStorm.
 * User: thierry
 * Date: 25/04/18
 * Time: 09:52
 */

$nombre_de_ligne = 0;

//la boucle while s'uttilise quand on ne saispas l'avvance le nombre de fois ou l'on veut itéré
while($nombre_de_ligne <= 10){


    echo "cette ligne est recopier tant quelle n'est pas supérieur ou égale à 10<br />" ;

    $nombre_de_ligne++;
}



//la boucle for s'uttilise quand on connais le nombre de fois ou l'on souhaite itérer
for($i = 0; $i <= 10; $i++){


    echo 'cette a été recopier '. $i. ' fois<br />';
}