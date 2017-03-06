<?php

class Video{


private $url;
private $title;
private $add_date;
private $nb_views;
private $is_active;


public function __construct($data = array()){

	//Constructeur qui permet de construire une video en passant un tableau en parametre 
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

//URL

public function setUrl($url){
	$this->url = $url;
}

public function getUrl(){
	return $this->url;

}


//TITLE

public function setTitle($title){
	$this->title = $title;
}

public function getTitle(){
	return $this->title;

}



//ADD_DATE

public function setAddDate($date){
	$this->add_date = $date;
}

public function getAddDate(){
	return $this->add_date;

}

//NB_VIEWS

public function setNbViews($nbviews){
	$this->nb_views = $nbviews;
}

public function getNbViews(){
	return $this->nb_views;

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