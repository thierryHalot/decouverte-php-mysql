<!DOCTYPE html>

<html>
<!-- En tous premier le code php est executer coté serveur,
puis renvoyer au client avec uniquement du code html/css,
 le navigateur ne sais pas lire du php !!!, le html sert à structurer la page,les balise php sont traduite en html-->
<head>

    <title>Notre première instruction : echo</title>

    <meta charset="utf-8" />

</head>

<body>

<h2>Affichage de texte avec PHP qui sera executer en premier </h2>



<p>

    Cette ligne a été écrite entièrement en HTML.<br />

<!--la balise echo permet d'afficher du texte,on utilise des \" pour afficher des guillements dans le texte  -->
    <?php echo "Celle-ci a été écrite entièrement en PHP."; ?><br />


    <?php echo "Celle-ci a été écrite \"uniquement\" en PHP."; ?>


    <p>Aujourd'hui nous somme le <?php echo date('d/m/Y h:i:s'); ?><p>





</p>

</body>

</html>