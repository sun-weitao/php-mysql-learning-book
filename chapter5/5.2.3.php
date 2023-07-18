<?php
//array(1,2,3,4,5,6)
$die = range(1, 6);
var_dump($die);
echo '<br/>';
//array(11) { [0]=> int(0) [1]=> int(2) [2]=> int(4) [3]=> int(6) [4]=> int(8) [5]=> int(10) [6]=> int(12) [7]=> int(14) [8]=> int(16) [9]=> int(18) [10]=> int(20) }
$even = range(0, 20, 2);
var_dump($even);
echo "<br/>";

//array(6) { [0]=> string(1) "A" [1]=> string(1) "B" [2]=> string(1) "C" [3]=> string(1) "D" [4]=> string(1) "E" [5]=> string(1) "F" }
$letters = range("A", "F");
var_dump($letters);