<?php
//在数组尾添加元素
$state = array("Ohio", "New York");
array_push($state, "California", "Texas");
//Array ( [0] => Ohio [1] => New York [2] => California [3] => Texas )
print_r($state);