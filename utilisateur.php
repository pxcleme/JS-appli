<html>
<head>
    <link rel="stylesheet" href="css_applis.css">
    <script type="text/javascript" src="">
    </script>
</head>   
<body>  
        <center>
            <h1><font color="red"> Utilisateur </font></h1>
        </center>

<ul>          <!-- debut du menus-->

    <li><a href="page_livre.php">Page des livres </a></li>
    <li><a href="page_auteur.php">Page des auteurs </a></li>
    <li><a href="page_commentaire.php">Page des commentaire  </a></li>
    <li style="float:right"><a class="active" href="page_daccueil.php">retour accueil</a></li>
    </ul>  
    <!-- fin du menus -->

    <p></p>
<form method='POST' action='Commentaire.php'>
Choisisser quelle utilisateur à supprimé (pas terminé, ne marche pas)<br>
<input type="checkbox" name="utilisateur" value="Jacob"> Jacob<br>
<input type="checkbox" name="utilisateur" value="Remi"> Remi<br>
<input type="checkbox" name="utilisateur" value="Tom"> Tom<br>
<input type="checkbox" name="utilisateur" value="Luca"> Luca<br>
<input type="checkbox" name="utilisateur" value="Antoine"> Antoine<br>
<input type="submit" name="exple2" value="Supprimé">
</form>
<form action="AffRadioPost.php" method="POST" name="formulaire">
Choissiser un Admin
<p><input type="radio" name="Admin" value="Mimos"> Maël</p>
<p><input type="radio" name="Admin" value="Clement"> Clément</p>
<input type="submit" value="Choisir">
</form>
</body>
</html>