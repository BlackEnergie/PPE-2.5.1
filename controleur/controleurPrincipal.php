<?php

require_once 'fonctions/menu.php';
require_once 'fonctions/formulaire.php';
require_once 'fonctions/dispatcher.php';



if(isset($_GET['m2lMP'])){
	$_SESSION['m2lMP']= $_GET['m2lMP'];
}
else
{
	if(!isset($_SESSION['m2lMP'])){
		$_SESSION['m2lMP']="accueil";
	}
}

$m2lMP = new Menu("m2lMP");
$m2lMP->ajouterComposant($m2lMP->creerItemLien("accueil", "Accueil"));
$m2lMP->ajouterComposant($m2lMP->creerItemLien("services", "Services"));
$m2lMP->ajouterComposant($m2lMP->creerItemLien("locaux", "Locaux"));
$m2lMP->ajouterComposant($m2lMP->creerItemLien("ligues", "Ligues"));
$m2lMP->ajouterComposant($m2lMP->creerItemLien("contact", "Contact"));



if (isset($_SESSION['intervenant']) && !is_null($_SESSION['intervenant'])){
    if (fixObject($_SESSION['intervenant'])->getStatut() == 'salarie'){
        $m2lMP->ajouterComposant($m2lMP->creerItemLien("formations", "Formations"));
        $m2lMP->ajouterComposant($m2lMP->creerItemLien("bulletins", "Bulletins"));
    }
    $m2lMP->ajouterComposant($m2lMP->creerItemLien("deconnexion", "Deconnexion"));
}
else{
    if (isset($_POST['login']) && isset($_POST['mdp'])){
        $int = IntervenantDAO::lesIntervenants($_POST['login'], $_POST['mdp']);
        if (!is_null($int))
        {
            $_SESSION['intervenant']=$int;
            $m2lMP->ajouterComposant($m2lMP->creerItemLien("deconnexion", "Deconnexion"));
            $_SESSION['m2lMP']="accueil";
            if ($int->getStatutIntervant() == 'salarie'){
                $m2lMP->ajouterComposant($m2lMP->creerItemLien("formation", "Formation"));
            }
        }
    } else{
        
        $m2lMP->ajouterComposant($m2lMP->creerItemLien("connexion", "Se connecter"));
    }
    
}

$menuPrincipal = $m2lMP->creerMenu($_SESSION['m2lMP'],'m2lMP');


include_once dispatcher::dispatch($_SESSION['m2lMP']);
