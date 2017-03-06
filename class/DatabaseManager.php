<?php

class DatabaseManager{


	const DBHOST ="localhost";
	const DBNAME ="partagetavideo";
	const DBROOT ="root";
	const DBPASS =""; 

	public function __construct(){

		

	}


	public static function getBdd(){

		try{

			$bdd = new PDO("mysql:host=".self::DBHOST.";dbname=".self::DBNAME.";charset=utf8",self::ROOT, self::PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			return $bdd;

		}catch(Exception $e){

			echo "Erreur".$e->getMessage();

		}
		

	

	}








}


?>