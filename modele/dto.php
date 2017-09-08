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
