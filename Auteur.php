<?php
class Auteur{

    private $_nom;
    private $_ID;

public function __construct($idauteur){
     try{
    //execution du code sur la BDD 
    $BDD = new PDO('mysql:host=localhost; dbname=livresdevoir; charset=utf8','root','root');
    $auteur = $BDD->query("SELECT * FROM auteur WHERE id_auteur = '".$idauteur."' ");
    $auteur = $auteur->fetch();
    $this->_nom = $auteur['Nom'];
    $this->_auteur = $auteur['Nmb de livres'];
}
catch (Exception $erreur)
{
    echo 'Erreur : '.$erreur->getmessage();
}
}
    public function getnom()
    {
        return $this->_nom;
    }     
    public function getID()
    {
        return $this->_ID;
    }

    public function AfficherAuteur()
    {
    echo  '<p> l auteur est '.$this->_nom.' qui a ecrit  '.$this->_auteur. ' livre.</p>';
    }
   
}           //fin de la class auteur
?>