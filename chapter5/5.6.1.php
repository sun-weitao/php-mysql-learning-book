<?php
$captitals = array("Ohio" => "Columbus", "Iowa" => "Des Moines");

echo "<p>Can you name the capitals of these states?</p>";

//key() 获取数组的健值
while ($key = key($captitals)) {
    printf("%s <br/>", $key);

    next($captitals); //移动指针
}

echo "next()函数使用举例 <br>";

$nums = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

print_r(next($nums)); //2
print_r(next($nums)); //3