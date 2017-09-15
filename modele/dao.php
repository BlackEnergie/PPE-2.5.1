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

/////////////////////////////
class LigueDAO{

    public function lire(Ligue $ligue){
        $sql = "select * from ligue where IDL=" . $ligue->getidLigue();
        $ligue = DBConnex::getInstance()->queryFetchFirstRow($sql);
        return $ligue;
    }


public static function lesLigues(){
	$result = array();
	$sql = "select * from ligue order by NOMLIGUE" ;
	$liste = DBConnex::getInstance()->queryFetchAll($sql);
	if(count($liste)> 0){
		foreach($liste as $ligue){
			$uneLigue = new Ligue($ligue[0],$ligue[1], $ligue[2],  $ligue[3]);
			$result[] = $uneEquipe;
		}
	}
	return $result;
}
}

////////////////////////////////////////////////
class IntervenantDAO{

	public function lire(Intervenant $intervenant){
		$sql = "select IDI, NOM, PRENOM, STATUT, LOGIN, MDP from intervenant order by NOM" . $intervenant->getidInvenant();
		$intervenant = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $intervenant;
}

public static function lesIntervenants(){
	$result = array();
	$sql = "select * from intervenant order by nomEquipe" ;
	$liste = DBConnex::getInstance()->queryFetchAll($sql);
	if(count($liste)> 0){
		foreach($liste as $intervenant){
			$unIntervenant = new Intervenant($intervenant[0],$intervenant[1], $intervenant[2],  $intervenant[3],  $intervenant[4],  $intervenant[5]);
			$result[] = $unIntervenant;
		}
	}
	return $result;
    }
}
/////////////////////////////////////////
class ClubDAO{

	public function lire(Club $club){
		$sql = "select * from club where IDL=" . $club->getidInvenant();
		$club = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $club;
}

public static function lesClub(){
	$result = array();
	$sql = "select IDCL, NOMCLUB, ADRESSECLUB from club order by NOMCLUB" ;
	$liste = DBConnex::getInstance()->queryFetchAll($sql);
	if(count($liste)> 0){
		foreach($liste as $club){
			$unClub = new Club($club[0],$club[1], $club[2]);
			$result[] = $unClub;
		}
	}
	return $result;
    }
}
////////////////////////////////////////////
class ContratDAO{

	public function lire(Contrat $contrat){
		$sql = "select * from contrat where IDL=" . $contrat->getidInvenant();
		$contrat = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $contrat;
}

public static function lesContrats(){
	$result = array();
	$sql = "select ID, DATEDEBUT, DATEFIN, TYPECONTRAT, NHEURES from contrat order by ID" ;
	$liste = DBConnex::getInstance()->queryFetchAll($sql);
	if(count($liste)> 0){
		foreach($liste as $contrat){
			$unContrat = new Contrat($contrat[0],$contrat[1], $contrat[2], $contrat[3], $contrat[4]);
			$result[] = $unContrat;
		}
	}
	return $result;
    }
}
//////////////////////////////////////////////////
class BulletinDAO{

	public function lire(Bulletin $bulletin){
		$sql = "select * from bulletin where IDL=" . $bulletin->getidInvenant();
		$bulletin = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $bulletin;
}

public static function lesBulletins(){
	$result = array();
	$sql = "select IDB, MOIS, ANNEE, BULLETININPDF from bulletin order by IDB" ;
	$liste = DBConnex::getInstance()->queryFetchAll($sql);
	if(count($liste)> 0){
		foreach($liste as $contrat){
			$unBulletin = new Bulletin($bulletin[0],$bulletin[1], $bulletin[2], $bulletin[3]);
			$result[] = $unBulletin;
		}
	}
	return $result;
    }
}
///////////////////////////////////////////////////////////
class FormationDAO{

	public function lire(Formation $formation){
		$sql = "select * from Formation where IDL=" . $formation->getidInvenant();
		$formation = DBConnex::getInstance()->queryFetchFirstRow($sql);
		return $formation;
}

public static function lesFormations(){
	$result = array();
	$sql = "select * from formation order by nomEquipe" ;
	$liste = DBConnex::getInstance()->queryFetchAll($sql);
	if(count($liste)> 0){
		foreach($liste as $equipe){
			$uneEquipe = new Formation($equipe['idEquipe'],$equipe['nomEquipe'], $equipe['nomEquipeLong'],  $equipe['nomEntraineur'],  $equipe['nomPresident'],  $equipe['dateFondation'] );
			$result[] = $uneEquipe;
		}
	}
	return $result;
    }
}
