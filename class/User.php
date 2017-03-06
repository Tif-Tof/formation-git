<?php

class User{


private $pseudo;
private $email;
private $password;
private $is_active;



public function __construct($data = array()){

	//Constructeur qui permet de construire un user en passant un tableau en parametre 
	// automatisation de la tache avec les setteur afin de permettre la creation d'une instance sans repeter l'action avec la fonction hydrate

	if(!empty($data)){
		$this->hydrate($data);
	}

}

public function hydrate($data = array()){
	if(isset($data)){
		foreach ($data as $key => $value) {
			$hydra = "set".ucfirst($key);
			if(method_exists($this, $hydra)){
				$this->$ydra($value);
				// ex : setPseudo("toto")-> Récupére le set+Clé
				//et on utilise la fonction set avec la valeur = toto

			}
		}
	}
}

//PSEUDO

public function setPseudo($pseudo){
	$this->pseudo = $pseudo;
}

public function getPseudo(){
	return $this->pseudo;

}


//EMAIL

public function setEmail($email){
	$this->pseudo = $email;
}

public function getEmail(){
	return $this->email;

}



//PASSWORD

public function setPassword($pass){
	$this->password = $pass;
}

public function getPassword(){
	return $this->password;

}


//IS_ACTIVE

public function setIsActive($isActive){
	$this->is_active = $isActive;
}

public function getIsActive(){
	return $this->is_active;

}


}







?>