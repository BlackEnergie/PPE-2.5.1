<?php

require_once 'modele/dao.php' ;
require_once 'fonctions/formulaire.php';


$listeBuletins = new Bulletin(BulletinDAO::lesBulletins());

/*****************************************************************************************************
 * Instancier un objet contenant la liste des Bulletins et le conserver dans une variable de session
 *****************************************************************************************************/
if(!isset($_SESSION['lesBulletins'])){
	$_SESSION['lesBulletins'] = new Bulletin(BulletinDAO::lesBulletins());

}

/*****************************************************************************************************
 * Instancier un objet Formulaire
 *****************************************************************************************************/
 
$interfaceBulletin = new Formulaire("GET", "index.php", "InterfaceBulletin", "connexion");

$titre = "<label class='titre'>Bulletins de salaire</label>";
$interfaceBulletin->ajouterComposantLigne($titre);
$interfaceBulletin->ajouterComposantTab();
foreach ($listeBuletins as $OBJ){
    $nomBulletin = $OBJ->getMois() . "/" . $OBJ->getAnnee() . " - ";
    $interfaceBulletin->ajouterComposantLigne($nomBulletin);
    $nomBulletin = $interfaceBulletin->creerLien("bulletins/" . $OBJ->getPDF(), $OBJ->getPDF());
    $interfaceBulletin->ajouterComposantLigne($nomBulletin);
    $interfaceBulletin->ajouterComposantTab();
}

$interfaceBulletin->creerFormulaire();

require_once 'vue/vueBulletins.php' ;
