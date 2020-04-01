<?php
include_once "interfaceDirect.php";
class Direct implements interfaceDirect{
	public $NotVisibaleDirect = array();
	public $SeeVisibaleDirect = array();
	public $BeforeTravel;
	public $TravelDirectory;
	public function setNotVisibaleDirect($var){
		array_push($this->NotVisibaleDirect,$var);
	}

    public function VisualDirect(){
    	 echo __DIR__;
    	 

    }
	public function AddTravel($var){
    $this->TravelDirectory="\\".$var;
    $this->BeforeTravel = $this->TravelDirectory;
	}
	public function Before(){
		echo $this->BeforeTravel;
	}
	public function DeleteTravel($var){

	}
	public function SeeDirect(){
		$dir = scandir(__DIR__);
		foreach ($dir as $key=>$value) {
			if($value!=$this->NotVisibaleDirect[$key]){
				array_push($this->SeeVisibaleDirect,$key); 
			}
			}
		echo $this->SeeVisibaleDirect;
	}
	};