<?php
$states = array(0 => "Alabama", 1 => "Alaska", 2 => "Annim");
echo $states[0] . "<br>";

$states2 = array("OH" => "Ohio", "PA" => "Pennsylvania", "NY" => "New York");
echo $states2["OH"] . "<br>";

$states3 = array(
    "Ohio" => array("population" => "11,353,140", "capital" => "Columbus"),
    "Nebraska" => array("population" => "1,711,263", "capital" => "Omaha")
);
echo $states3["Ohio"]["population"];