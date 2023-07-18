<?php
$states = array("Ohio", "Florida", "Texas");

foreach ($states as $state) {
    echo "{$state} <br>";
}

$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jason Gilmor34", "jason@example.com", "614-999-9999");
$customers[] = array("Jason Gilmor54e", "jason@example.com", "614-999-9999");
$customers[] = array("Jason 32", "jason@example.com", "614-999-9999");
$customers[] = array("Jason Gilmo43re", "jason@example.com", "614-999-9999");

//vprint 可以更好的展示一个数组
foreach ($customers as $customer) {
    vprintf("<p>Name: %s<br/> Email: %s<br/> Phone: %s<br></p>", $customer);
}
//使用print_r 直接打印一个数组
print_r($customers);