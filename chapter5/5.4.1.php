<?php
//在数组头添加元素
$state = array("Ohio", "New York");
array_unshift($state, "California", "Texas");
//Array ( [0] => California [1] => Texas [2] => Ohio [3] => New York )
print_r($state);