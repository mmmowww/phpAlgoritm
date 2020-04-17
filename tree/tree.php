<?
include "itree.php";
class tree implements itree {
	public $tree = array('LeftLink' =>[], 
			             'value' => 0,
			             'RightLink' =>[],); // Мы всегда стартуем от числа 0
	public $iterator = 0;
	public function add($var){
		$search = $this->$tree[0];
	while(if(true==isset($this->tree[$this->iterator]))){
  	    $this->iterator++;
		if($var["value"] > $serach){
			array_unshift($this->tree["LeftLink"],$var); //Добавление с лево
			var_dump($this->tree);
		    die();
		}else {
			array_push($this->tree["RightLink"],$var);}; // Добовление с право
		    var_dump($this->tree);
		    die();
	}}
	public function delete($var){
		$delete = true;
		$this->iterator = 0;
		while($delete == true){
			if($this->tree["value"] => $var["value"]){
				array_splice($this->tree,1);
				$this->iterator = $this->iterator++;
				$delete = false;
			}else{
				array_splice($this->tree,-1);
				$this->iterator = $this->iterator++;
			}
		}
		$this->iterator = 0;
	}
	public function shou(){
		/// Вроде должна идти по уровням дерева.
		///    1
		///   2  3
		//// Сперва должно выввести 1
		// Потом 2 и 3 по идеи..
		$step = 0;
		while(count($this->tree) > 0){
			print_r($this->tree[$step]."</br>");
			$step = $step++;
		}
		$step = 0;
	}
}
?>