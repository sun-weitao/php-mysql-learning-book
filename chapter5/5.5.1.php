<?php
//搜索数组
$states = array("Ohio", "New York", "California", "Texas");
$state = "Ohio";
//是否存在
if (in_array($state, $states)) {
    echo "Not to worry,$state is smoke-free";
}
echo "<br>";
$state2 = array(
    "Delaware" => "December 7, 1787",
    "Pennsylvania" => "December 12, 1787",
    "Ohio" => "March 1, 1803"
);
//搜索key是否存在
if (array_key_exists("Ohio", $state2)) {
    printf("Ohio joined the Union on %s", $state2["Ohio"]);
}
echo "<br>";
//搜索值是否存在
$founded = array_search("December 7, 1787", $state2); //返回的是 key
if ($founded) {
    printf("%s was founded on %s", $founded, $state2[$founded]);
}