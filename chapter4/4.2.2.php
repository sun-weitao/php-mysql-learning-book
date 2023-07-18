<?php
//按引用传递参数
$cost = 20.99;
$tax = 0.0575;

function calculateCost(&$cost, $tax)
{
    $cost = $cost + ($cost * $tax);
    $tax += 4;
}

calculateCost($cost, $tax);
printf("Tax is %01.2f%%", $tax * 100);
printf("Cost is: $%01.2f", $cost);