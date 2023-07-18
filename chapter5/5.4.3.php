<?php
//从数组头删除元素
$states = array("Ohio", "New York", "California", "Texas");
print_r($states);
echo "<br>";
$state = array_shift($states);
print_r($state);