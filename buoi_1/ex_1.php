<?php
	// $name = 'zent';
	// echo "Xin chào " . $name . " !<br>";
	// echo "<h1>" . "Nguyễn Quang Thành" . "</h1>";
	// $sologan = "code your life";
	// echo "Zent - $sologan" . "<br>";
	// define('USER', 'zentgroup');
 //    define('PASS', '123456');
 //    echo USER;
// $a = '1';
// $b = '2';
// $c = '3';
// if ($a == 0) {
// 	echo "a phải khác 0";
// } else {
// 	echo $x = ($c - $b) / $a;
// }
// 
// for ($i=1; $i <= 10; $i++) { 
// 	echo "anh yeu em lan " . $i . "<br>";
// }
// $j = 1;
// while ($j <= 10) {
// 	echo "dung vong while lan thu " . $j . "<br>";
// 	$j++;
// }
// $k = 1;
// do {
// 	echo "dùng do - while lần thứ " .$k .'<br>';
// 	$k++;
// } while($k <= 10);
$n = 2;
$sum = 0;
if ($n % 2 != 0) {
	for ($i=1; $i <= $n; $i+= 2) { 
	$sum += $i*$i;
	}
	echo $sum;
} else {
	echo "phai la số lẻ!" . '<br>';
}
?>