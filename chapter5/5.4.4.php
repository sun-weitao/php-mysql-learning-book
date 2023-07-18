<?php
//从数组尾删除元素
$states = array("Ohio", "New York", "California", "Texas");
$state = array_pop($states);
print_r($state);