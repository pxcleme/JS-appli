<?php
class livre{

    private $_nom;
    private $_auteur;
    private $_genre;
    private $_id;

public function __construct($idlivre){
     try{
    //execution du code sur la BDD 
    $BDD = new PDO('mysql:host=localhost; dbname=livresdevoir; charset=utf8','root','root');
    $livre = $BDD->query("SELECT * FROM livres WHERE id_livre = '".$idlivre."' ");
    $livre = $livre->fetch();
    $this->_nom = $livre['Titre'];
    $this->_auteur = $livre['Auteur'];
    }
    catch (Exception $erreur)
    {
    echo 'Erreur : '.$erreur->getmessage();
    }

    $reponse = $BDD->query('SELECT titre FROM livre');

    }   
    public function getnom()        //revoie le nom
    {
        return $this->_nom;
    }   
    public function getauteur()     //renvoie l'auteur
    {
        return $this->_auteur;
    }   
    public function getID()         // renvoie l'id de l'auteur
    {
        return $this->_id;
    }
    public function getgenre()      // renvoie le genre du livre
    {
        return $this->_genre;
    }


    public function Afficherlivre()
    {
    echo  '<p> le titre du livre est '.$this->_nom.' est a etait ecrit par '.$this->_auteur. '</p>';
    }
   
}           //fin de la class livre
?>