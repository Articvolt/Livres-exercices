
<?php

class auteur{
    private $_nom;      // underscore "_" pour différencier les méthodes des attributs
    private $_prenom;
    private $_livre;

    public function __construct(string $prenom, string $nom ){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_livre = [];     //création d'un tableau prenant l'objet livre, l'ensembles des variables livres
    }

    public function getPrenom(){
        return $this->_prenom;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function setPrenom(){
        return $this->_prenom;
    }
    public function setNom(){
        return $this->_nom;
    }
    public function setLivre(){
        return $this->_livre;
    }

    public function ajouterLivre($nlivre){       //fonction pour rajouter de nouveaux livres
        array_push($this->_livre, $nlivre);      //empile un/plusieurs éléments du tableau
    }

    public function afficherBibliographie(){     //fonction pour afficher et se répéter pour chaques variables livres
        foreach ($this->_livre as $livre){      //répétition de l'objet livre
            echo $livre;                        //affichage de la ligne du tableau
        }
    }

    public function __toString(){        //créé une représentation textuelle de l'objet
        return "$this->_prenom $this->_nom";
    }
}



