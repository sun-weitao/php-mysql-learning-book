<?php
//获取当前数组值
$capitals = array("Ohio" => "Columbus", "Iowa" => "Des Moines");

echo "<p>Can you name the states belonging to these capitals?</p>";

while ($capital = current($capitals)) {
    printf("%s <br/>", $capital);
    next($capitals);
}