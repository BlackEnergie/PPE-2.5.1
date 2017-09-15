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

<<<<<<< HEAD

/*****************************************************************************************************
 * Récupérer le bulletin sélectionnée
 *****************************************************************************************************/

/*  $equipeActive = $_SESSION['lesBulletins']->chercheBulletin($_SESSION['bulletin']);

if($_SESSION['bulletin'] != 0 && isset($_POST['modifier'])){
    $bulletinActive->setNomEquipe($_POST['nomEquipe']);
    $bulletinActive->setNomEquipeLong($_POST['nomEquipeLong']);
    $bulletinActive->setNomEntraineur($_POST['nomEntraineur']);
<<<<<<< HEAD
   $bulletinActive->setNomPresident($_POST['nomPresident']);
   $bulletinActive->setDateFondation($_POST['dateFondation']);
} */

    $bulletinActive->setNomPresident($_POST['nomPresident']);
    $bulletinActive->setDateFondation($_POST['dateFondation']);
<<< HEAD
    BulletinDAO::modifier($equipeActive);
=======
>>>>>>> c3d7e11ee3d1c87b12ace5b360ddeed30e110e69
}
>>>>>>> 7e1dfd3aa3d09f8c3bdb9fa56c0ae74e6d86e6b3

require_once 'vue/vueBulletins.php' ;
=======
require_once 'vue/vueBulletins.php' ;
>>>>>>> 6ddd6cf24e0e9c44a197c997b2d7f9eec250c3c0
