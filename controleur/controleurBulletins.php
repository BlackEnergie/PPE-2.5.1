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
foreach ($listeBuletins->getBulletins() as $OBJ){
    $nomBulletin = $OBJ->;
}
 /*if(isset($_GET['bulletin'])){
 *	$_SESSION['bulletin']= $_GET['bulletin'];
 *}
 *else
 *{
 *	if(!isset($_SESSION['bulletin'])){
 *		$_SESSION['bulletin']="0";
 *	}
 *}
 *
 * $link = "\"le lien\"";
 * echo "<a href=" . $link . ">PDF</a>";
 */

require_once 'vue/vueBulletins.php' ;
