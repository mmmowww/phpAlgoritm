<?
include_once "INumero.php";
class NumeroTest implements INumero {
	
	public $var;
	public $Answer = array(0);
	public function NumerooTest($var){
			$start = microtime();

        for($i=1;$i<=$var;$i++){
	 
              $remains=$var%$i;
               if($remains == 0){
      	            $iteration = $i;         
			    array_push($this->Answer,$iteration);
						};
      
                   };
                  $finish = microtime();
                  $SpentTime = $finish-$start;
          var_dump($this->Answer);
          echo "</br>";
          echo "Дллина массива ".count($this->Answer)."</br>";
          echo "Сумма Массива ".array_sum($this->Answer)."</br>";
          echo "Время потраченно  ".$SpentTime;

}
};