<?php
class commentaire{

    private $_ID;
    private $_MDP;
    private $_Texte;

public function __construct($idcom)
{
     try{
    //execution du code sur la BDD 
    $BDD = new PDO('mysql:host=localhost; dbname=livresdevoir; charset=utf8','root','root');
    $texte = $BDD->query("SELECT * FROM commentaire WHERE ID_commen = '".$idcom."' ");
    $texte = $texte->fetch();
    $this->_Texte = $texte['Texte'];
}

catch (Exception $erreur)
{
    echo 'Erreur : '.$erreur->getmessage();
}

}     
    public function getTexte()
    {
        return $this->_Texte;
    }

    public function AfficherCommentaire()
    {
        echo $this->_Texte;
    }
   
}           //fin de la class commentaire
?>