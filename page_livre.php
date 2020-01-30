<html>
<?php require("Livre.php");
?>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css_applis.css">
</head>   
<body>
        <center>
            <h1><font color="red">les diffrents livres sur Mylivre</font></h1>
        </center>
<ul>
<!-- debut du menus-->
        <li><a href="page_auteur.php">Page des auteurs </a></li>
        <li><a href="page_commentaire.php">Page des commentaire</a></li>
        <li><a href="utilisateur.php">Page d'utilisateur</a></li>
        <li style="float:right"><a class="active" href="page_daccueil.php">retour accueil</a></li>
</ul>
<!-- fin du menus -->

<img src="book.jpg"
    width="900px">

    <?php

    $livre=new livre(1);
    $livre->Afficherlivre();
    
    $livre1=new livre(2);
    $livre1->Afficherlivre();

    $livre2=new livre(5);
    $livre2->Afficherlivre();

    // ainsi de suite... 


?>
</body>
</html>