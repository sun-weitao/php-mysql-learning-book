<?php
//通过值传递参数


// 不推荐写在前面 calcSalesTax(15.00, .075);

function calcSalesTax($price, $tax)
{
    $total = $price + ($price * $tax);
    echo "Total cost: $total";
}

calcSalesTax(15.00, .075);
//第二种传参方式
$pricetag = 15.00;
$salestax = .075;
calcSalesTax($pricetag, $salestax);