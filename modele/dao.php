<?php
class DBConnex extends PDO{

	private static $instance;

	public static function getInstance(){
		if ( !self::$instance ){
			self::$instance = new DBConnex();
		}
		return self::$instance;
	}

	function __construct(){
		try {
			parent::__construct($dsn ,$user, $pass);
		} catch (Exception $e) {
			echo $e->getMessage();
			die("Impossible de se connecter. " );
		}
	}




	public function queryFetchAll($sql){
		$sth  = $this -> query($sql);

		if ( $sth ){
			return $sth -> fetchAll(PDO::FETCH_ASSOC);
		}

		return false;
	}


	public function queryFetchFirstRow($sql){
		$sth    = $this -> query($sql);
		$result    = array();

		if ( $sth ){
			$result  = $sth -> fetch();
		}

		return $result;
	}


}

class LigueDAO{

    public function lire(Ligue $ligue){
        $sql = "select * from ligue where IDL=" . $ligue->getidLigue();
        $ligue = DBConnex::getInstance()->queryFetchFirstRow($sql);
        return $ligue;
    }

}

class IntervenantDAO{

	public function lire(Intervenant $intervenant)
		$sql = "select * from intervenant where IDL=" . $intervenant->getidInvenant();
		$intervenant = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $intervenant;
}

class ClubDAO{

	public function lire(Club $club)
		$sql = "select * from club where IDL=" . $club->getidInvenant();
		$club = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $club;
}

class ContratDAO{

	public function lire(Contrat $contrat)
		$sql = "select * from contrat where IDL=" . $contrat->getidInvenant();
		$contrat = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $contrat;
}

class BulletinDAO{

	public function lire(Bulletin $bulletin)
		$sql = "select * from bulletin where IDL=" . $bulletin->getidInvenant();
		$bulletin = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $bulletin;
}

class FormationDAO{

	public function lire(Formation $formation)
		$sql = "select * from Formation where IDL=" . $formation->getidInvenant();
		$formation = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $formation;
}

/* class EquipeDAO{

	public function lire(Equipe $equipe){
		$sql = "select * from Equipe where idEquipe = " . $equipe->getIdEquipe();
		$equipe = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $equipe;
	}



	public static function lesEquipes(){
		$result = array();
		$sql = "select * from equipe order by nomEquipe" ;
		$liste = DBConnex::getInstance()->queryFetchAll($sql);
		if(count($liste)> 0){
			foreach($liste as $equipe){
				$uneEquipe = new Equipe($equipe['idEquipe'],$equipe['nomEquipe'], $equipe['nomEquipeLong'],  $equipe['nomEntraineur'],  $equipe['nomPresident'],  $equipe['dateFondation'] );
				$result[] = $uneEquipe;
			}
		}
		return $result;
	}
*/
