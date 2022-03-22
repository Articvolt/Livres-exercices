<h1>POO LIVRE</h1>

<p>
Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des livres et leurs auteurs respectifs<br>
Les livres  sont  caractérisés  par  un  titre,  un  nombre  de  pages,  une  année  de  parution,  un  prix  et  un auteur. Un auteur est identifié par un nom et un prénom.<br>
Une méthode toString sera appréciée dans chacune de vos classes.<br>
Vous   implémenterez   une   méthode afficherBibliographie qui  permettra  d’afficher  la bibliographie d’un auteur:
</p>

<h2>LES LIVRES DE STEPHEN KING</h2>


<p>
"Ca" (1986) : 1138 pages / 20 € <br>
"Simetierre" (1983) : 374 pages / 15 €<br>
"Le Fleau" (1978) : 823 pages / 14 €<br>
"Shining" (1977) : 447 pages / 16 € <br>
</p>

<h2>RESULTAT</h2>

<?php

require "Auteur.php";
require "Livres.php";

$auteur = new auteur("Stephen","King");

$livre1 = new livre ("Ca",1138,"1986",20,$auteur);  //variable en string, float, string, integer  puis la variable $auteur
$livre2 = new livre ("Simetierre",374,"1983",15,$auteur);
$livre3 = new livre ("Le Fleau",823,"1978",14,$auteur);
$livre4 = new livre ("Shining",447,"1977",16,$auteur);

echo "<h2>Livres de $auteur</h2>".'<br>';

$auteur->afficherBibliographie();
