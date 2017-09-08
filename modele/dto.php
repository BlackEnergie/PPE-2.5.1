<?php 
class Equipe{
	private $idEquipe;
	private $unNomEquipe;
	private $unNomEquipeLong;
	private $unNomEntraineur;
	private $unNomPresident;
	private $uneDateFondation;

	public function __construct($unIdEquipe , $unNomEquipe, $unNomEquipeLong, $unNomEntraineur, $unNomPresident, $uneDateFondation){
		$this->idEquipe = $unIdEquipe;
		$this->nomEquipe = $unNomEquipe;
		$this->nomEquipeLong = $unNomEquipeLong;
		$this->nomEntraineur = $unNomEntraineur;
		$this->nomPresident = $unNomPresident;
		$this->dateFondation = $uneDateFondation;
	}

	public function getIdEquipe(){
		return $this->idEquipe;
	}

	public function getNomEquipe(){
		return $this->nomEquipe;
	}
	
	public function setNomEquipe($unNomEquipeLong){
		$this->nomEquipe = $unNomEquipe;
	}
	
	public function getNomEquipeLong(){
		return $this->nomEquipeLong;
	}
	
	public function setNomEquipeLong($unNomEquipeLong){
		$this->nomEquipeLong = $unNomEquipeLong;
	}
	
	public function getNomEntraineur(){
		return $this->nomEntraineur;
	}
	
	public function setNomEntraineur($unNomEntraineur){
		$this->nomEntraineur = $unNomEntraineur;
	}
	
	public function getNomPresident(){
		return $this->nomPresident;
	}
	
	public function setNomPresident($unNomPresident){
		$this->nomPresident = $unNomPresident;
	}
	
	public function getDateFondation(){
		return $this->dateFondation;
	}
	
	public function setDateFondation($uneDateFondation){
		$this->dateFondation = $uneDateFondation;
	}
	
	public function hydrate(array $data){
		foreach($data as $key => $value){
			$method = 'set' .ucfirst($key);
			if (method_exists($this, $method)){
				$this->$method($value);
			}
		}
	}
	
}


class Equipes{
	private $equipes= array();
	
	public function __construct($array){
		if (is_array($array)) {
			$this->equipes = $array;
		}
	}
	
	public function getEquipes(){
		return $this->equipes;
	}
	
	public function chercheEquipe($unIdEquipe){
		$i = 0;
		while ($unIdEquipe != $this->equipes[$i]->getIdEquipe() && $i < count($this->equipes)-1){
			$i++;
		}
		if($unIdEquipe == $this->equipes[$i]->getIdEquipe()){
			return $this->equipes[$i];
		}
	}
}



