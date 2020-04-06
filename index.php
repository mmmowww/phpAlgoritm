<?php
include_once "NumeroTest/NumeroTest.php";
include_once "ClassRealisation/Direct.php";
/// mmmowww
//$Test = new NumeroTest();
//$Test->NumerooTest(100);
/////////////
//1) Задание
//1.1) O(n)
//1.2) O(2*n)
//1.3) Кажеться О(1)*О(1)

// O(n)

//1)700 раз каждую единицу $n прибовляеться 7

$n = 100;
$array[]= [];

for ($i = 0; $i < $n; $i++) {
for ($j = 1; $j < $n; $j *= 2) {
$array[$i][$j]= true;
} }
echo "</br>--Второй--</br>";
//2)2600 итераций
$n = 100;
$array[] = [];

for ($i = 0; $i < $n; $i += 2) {
	
for ($j = $i; $j < $n; $j++) {
$array[$i][$j]= true;





} }

////////////// 

