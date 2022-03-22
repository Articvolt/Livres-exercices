
<?php

class livre {
    private $titre;
    private $nbPages;
    private $annee;
    private $prix;
    private $auteur;

    public function __construct( string $titre, string $annee, float $nbPages, int $prix,auteur $auteur){   //ne pas se tromper dans l'ordre de la parenthèse et celui des variables livres1,2,3,4
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->annee = $annee;
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $auteur->ajouterLivre($this);  
    }
    
    public function getAuteur(){
        return $this->auteur;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getAnnee(){
        return $this->annee;
    }
    public function getNbPages(){
        return $this->nbPages;
    }
    public function getPrix(){
        return $this->prix;
    }

    public function setAuteur(){
        return $this->auteur;
    }

    public function setTitre(){
        return $this->titre;
    }

    public function setAnnee(){
        return $this->annee;
    }

    public function setNbPages(){
        return $this->nbPages;
    }

    public function setPrix(){
        return $this->prix;
    }

    public function __toString() {     //créé une représentation textuelle de l'objet
       return  "$this->titre ($this->annee) : $this->nbPages pages / $this->prix euros <br>";
    }
}


/* 
"get" : accesseur qui récupère un attribut d'un objet instancié (par exemple, le nom du livre)
"set" : mutateur qui modifie un attribut (par exemple, changer le nom du livre)
"private" : accessible que depuis la classe où il est déclaré
"public" : accessible depuis n'importe où dans l'application
*/
