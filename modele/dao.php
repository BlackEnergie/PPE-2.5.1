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
}


