<?php 
///Решение в лоб
// Больше похоже на сровнение по "Хешу"
$start = microtime(true);
$array1 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
//              0 1 2 3 4 5 6 7 8  9 10 11 12 13 14 15 16 17 18 19
$array2 = array(1,2,3,4,5,6,7,8,9,10,11,13,14,15,16,17,18,19,20);
$SUM1 = array_sum($array1);
echo "</br>";
$SUM2 = array_sum($array2);
$finish = microtime(true);
echo $SUM2 = $SUM2 - $SUM1;
echo "</br>";
echo $start."</br>";
echo $finish;
//////////// O(n)
/// Идея второго алгоритма в следующем
//// Бирём из масива масив, с определёным шагом.
/// Допустим каждый 10 элемент
// например это будет 10,20,30,40 и тд
// Мы знаем что пропущен 1 элемент и массив по идеи отсортирован.
// Мы ищем так называемый артифакт поиска что то вроде этого
/// 12,22,32,33,43, и т.д.
// Что бы егонайти мы делаем ещё одну выборку i++ где i это число после десяти.
// Например 11,21,31 ......
// Делаем до тех пор пока не найдёться артифакт. 
// В случае успеха.
// Мы берём начало то десятины где они не отличаються от стандратного расположения.
// И в качестве конечного результата мы берём ту десятину "где уже всё плохо" где идёт смещения порядка.
// И производим поиск между ними. В итоге находим этот артифакт.
// По идеи это 10 выборк на 10. Если масив из 100
// Если массив из 1000 то 100 выборок последня выборка 10
// если 10000  то 1000 выборок последний шаг всеравно будет 10.
// Возможно есть шанс как-то оптимизировать первую выборку но пока даже не предстовляю.
// Интересно услышать Ваше мнение на уроке, прав ли я в своих мыслях
$count = count($array2);
$i = 0;
$Iteration = 10;
$Answer = 0;
while($count != $i){
	$HESH = array_merge($array1[$i],$array2[$i]);
	if($HESH[0] != $HESH[1]){
			$START = $HESH[0];
			$FINIS = $HESH[1];
			for($i = $START; $i != $FINISH; $i++){
				if($arrai1[$START] != $array2[$i]{
					$Answer = $array2[$i];
					break;
				}
			}

	}
	$HESH = array();
	$i = $Iteration++;
}

