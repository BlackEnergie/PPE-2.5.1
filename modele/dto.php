<?php 
class Ligue {
    private $id;
    private $nom;
    private $site;
    private $description;
    
    public function __construct($unId, $unNom, $unSite, $unDescriptif){
        $this->id = $unId;
        $this->nom = $unNom;
        $this->site = $unSite;
        $this->description = $unDescriptif;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($unId){
        $this->id = $unId;
    }
        
    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($unNom){
        $this->nom = $unNom;
    }
    
    public function getSite(){
        return $this->site;
    }
    
    public function setSite($unSite){
        $this->site = $unSite;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($uneDescription){
        $this->description = $uneDescription;
    }
}

class Intervenant{
    private $id;
    private $nom;
    private $prenom;
    private $statut;
    private $idClub;
    private $login;
    private $password;
    private $idFonction;
    private $codeRole;
    private $idLigue;
    
    public function __construct($unId, $unNom, $unPrenom, $unStatut, $unIdClub, $unLogin, $unPwd, $uneFnctn, $unRole,$uneLigue){
        $this->id = $unId;
        $this->nom = $unNom;
        $this->prenom = $unPrenom;
        $this->statut = $unStatut;
        $this->idClub = $unIdClub;
        $this->login = $unLogin;
        $this->password = $unPwd;
        $this->idFonction = $uneFnctn;
        $this->codeRole = $unRole;
        $this->idLigue = $uneLigue;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNom(){
        return $this->nom;
    }

    
    public function getPrenom(){
        return $this->prenom;
    }
    
    public function getStatut(){
        return $this->statut;
    }
    
    public function getIdClub(){
        return $this->idClub;
    }
    
    public function getLogin(){
        return $this->login;
    }
    
    public function getMdp(){
        return $this->password;
    }
    
    public function getFonction(){
        return $this->idFonction;
    }
    
    public function getRole(){
        return $this->codeRole;
    }
    
    public function getLigue(){
        return $this->idLigue;
    }
    
}

class Club {
    private $id;
    private $ligue;
    private $codeVille;
    private $nomClub;
    private $adresse;
    
    public function __construct($unId, $uneLigue, $unCodeVille, $unNomClub, $uneAdresse){
        $this->id = $unId;
        $this->ligue = $uneLigue;
        $this->codeVille = $unCodeVille;
        $this->nomClub = $unNomClub;
        $this->adresse = $uneAdresse;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getLigue(){
        return $this->ligue;
    }
    
    public function getCodeVille(){
        return $this->codeVille;
    }
    
    public function getNomClub(){
        return $this->nomClub;
    }
    
    public function getAdresse(){
        return $this->adresse;
    }
    
}

class Contrat {
    private $id;
    private $dateDebut;
    private $dateFin;
    private $typeContrat;
    private $nbHeures;
    
    public function __construct($id, $debut, $fin, $type, $heures){
        $this->id = $id;
        $this->dateDebut = $debut;
        $this->dateFin = $fin;
        $this->typeContrat = $type;
        $this->nbHeures = $heures;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getDateDebut(){
        return $this->dateDebut;
    }
    
    public function getDateFin(){
        return $this->dateFin;
    }
    
    public function getTypeContrat(){
        return $this->typeContrat;
    }
    
    public function getNbHeures(){
        return $this->nbHeures;
    }
    
}

class Bulletin {
    private $numero;
    private $mois;
    private $annee;
    private $pdf;
    
    public function __construct($numero, $mois, $annee, $pdf){
        $this->numero = $numero;
        $this->mois = $mois;
        $this->annee = $annee;
        $this->pdf = $pdf;
    }
    
    public function getNumero(){
        return $this->numero;
    }
    
    public function getMois(){
        return $this->mois;
    }
    
    public function getAnnee(){
        return $this->annee;
    }
    
    public function getPDF(){
        return $this->pdf;
    }
}

class Formation {
    private $id;
    private $titre;
    private $description;
    private $dateDebut;
    private $dateFin;
    private $ouvertureInscriptions;
    private $clotureInscription;
    private $duree;
    private $effectifMax;
    
    public function __construct($id, $titre, $description, $dateDebut, $dateFin, $Oinscription, $Finscription, $duree, $effectif){
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->ouvertureInscriptions = $Oinscription;
        $this->clotureInscription = $Finscription;
        $this->duree = $duree;
        $this->effectifMax = $effectif;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getTitre(){
        return $this->titre;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function getDateDebut(){
        return $this->dateDebut;
    }
    
    public function getDateFin(){
        return $this->dateFin;
    }
    
    public function getDateOuvertureInscri(){
        return $this->ouvertureInscriptions;
    }
    
    public function getDateFermetureInscri(){
        return $this->clotureInscription;
    }
    
    public function getDuree(){
        return $this->duree;
    }
    
    public function getEffectifMax(){
        return $this->effectifMax;
    }
}
