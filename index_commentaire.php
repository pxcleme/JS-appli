<?php require("Commentaire.php");
?>

<html>
<head>  
        <meta charset="utf-8"/>
</head>
<body>
    
    <?php

    $commentaire=new commentaire(1);
    $commentaire->AfficherCommentaire();
    
    $commentaire1=new commentaire(2);
    $commentaire1->AfficherCommentaire();



    // ainsi de suite... 


?>
</body>
</html>