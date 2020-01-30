<html>
<?php require("Commentaire.php");
?>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css_applis.css">
</head>
<body>
<div class="titre"> 
        <center>
            <h1><font color="red">Page de Commentaire </font></h1>    <!--titre de la page-->
        </center>
<ul>
<!-- debut du menus-->
        <li><a href="page_livre.php">Page des livres </a></li>
        <li><a href="page_auteur.php">Page des auteurs</a></li>
        <li><a href="utilisateur.php">Page d'utilisateur</a></li>
        <li style="float:right"><a class="active" href="page_daccueil.php">retour accueil</a></li>
</ul>
<!-- fin du menus -->

<form method="post" action="index.php"> 
<!-- liste deroulant -->
<FORM action methode="POST"> 
<select name="auteur" id="1">
<?php
    foreach($Tab as $auteur)
    {
        echo '<option value="'.$auteur->getld().'">'.$auteur->getNom().'</option>';

    }
?>

<option value="1"select>malade imaginaire</option>
<option value="2"select>Oscar Pill</option>
<option value="3"select>Apprendre le php pour les nuls</option>
<option value="4"select>Outlast</option>
<option value="5"select>Troll de Troy</option>
</select>
</FORM>
<!-- liste deroulant -->
<p> 

    <form method="post" action="index.php">

<p>
    <label for="commentaire">votre commentaire : </label> <input type="text" id="commen" name="commentaire"> </p>
    <div><button type="submit">Confirmer</button>
        <button type="reset">remise a zero</button></div>
    </form>

    <?php
     $IDcommen=new commentaire(1);
     $IDcommen->AfficherCommentaire();
?>
     <p></p>
     <?php
     $IDcommen=new commentaire(2);
     $IDcommen->AfficherCommentaire();
    ?>
</body>
</html>