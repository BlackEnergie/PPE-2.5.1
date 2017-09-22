<?php

$interfaceConnexion = new Formulaire("GET", "index.php", "InterfaceConnexion","connexion");


$titre="<label class='titre'> Connexion </label>";
$interfaceConnexion->ajouterComposantLigne($titre);
$interfaceConnexion->ajouterComposantTab();

$label=$interfaceConnexion->creerLabel("Login : ");
$composant=$interfaceConnexion->creerInputTexte("login", "login", "", 1, "Login", "");
$composant=$interfaceConnexion->concactComposants($label, $composant);
$interfaceConnexion->ajouterComposantLigne($composant);

$label=$interfaceConnexion->creerLabel("Mot de passe : ");
$composant=$interfaceConnexion->creerInputMdp("pw", "pw", 1, "Mot de passe", "");
$composant=$interfaceConnexion->concactComposants($label, $composant);
$interfaceConnexion->ajouterComposantLigne($composant);
$interfaceConnexion->ajouterComposantTab();

$composant=$interfaceConnexion->creerInputSubmit("submit", "submit", "Connexion");
$interfaceConnexion->ajouterComposantLigne($composant);
$interfaceConnexion->ajouterComposantTab();

$interfaceConnexion->creerFormulaire();



require_once 'vue/vueConnexion.php' ;
