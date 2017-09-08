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

