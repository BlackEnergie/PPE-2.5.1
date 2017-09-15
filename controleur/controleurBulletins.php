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
/*
 * $link = "\"le lien\"";
 * echo "<a href=" . $link . ">PDF</a>";
 */

require_once 'vue/vueBulletins.php' ;
