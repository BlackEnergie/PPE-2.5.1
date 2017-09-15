<?php

/*****************************************************************************************************
 * Instancier un objet contenant la liste des Bulletins et le conserver dans une variable de session
 *****************************************************************************************************/
if(!isset($_SESSION['lesBulletins'])){
	$_SESSION['lesBulletins'] = new Bulletin(BulletinDAO::lesBulletins());

}

/*****************************************************************************************************
 * Conserver dans une variable de session l'item actif du menu equipe
 *****************************************************************************************************/
if(isset($_GET['bulletin'])){
	$_SESSION['bulletin']= $_GET['bulletin'];
}
else
{
	if(!isset($_SESSION['bulletin'])){
		$_SESSION['bulletin']="0";
	}
}


/*****************************************************************************************************
 * Récupérer l'équipe sélectionnée
 *****************************************************************************************************/
$equipeActive = $_SESSION['lesBulletins']->chercheEquipe($_SESSION['bulletin']);

if($_SESSION['bulletin'] != 0 && isset($_POST['modifier'])){
    $bulletinActive->setNomEquipe($_POST['nomEquipe']);
    $bulletinActive->setNomEquipeLong($_POST['nomEquipeLong']);
    $bulletinActive->setNomEntraineur($_POST['nomEntraineur']);
    $bulletinActive->setNomPresident($_POST['nomPresident']);
    $bulletinActive->setDateFondation($_POST['dateFondation']);
<<<<<<< HEAD
    BulletinDAO::modifier($equipeActive);
=======
>>>>>>> c3d7e11ee3d1c87b12ace5b360ddeed30e110e69
}

require_once 'vue/vueBulletins.php' ;
