<?php
//默认参数值
function calcSalesTax($price, $tax = .0675)
{
    $total = $price + ($price * $tax);
    echo "Total cost: $total";
}
$price = 15.47;

calcSalesTax($price);

function calculate($price, $price2 = 0.0, $price3 = 0.0)
{
    echo $price + $price2 + $price3;
}
calculate(10.0, 0.0, 3.0);