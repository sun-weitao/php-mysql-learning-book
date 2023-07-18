<?php
function calcSalesTax($price, $tax = .675)
{
    // $total = $price + ($price * $tax);
    // echo "Total cost: $total";
    return $price + ($price * $tax);
}

$price = 6.99;
$total = calcSalesTax($price);

echo "Total cost: $total" . PHP_EOL;

$colors = array("red", "blue", "green");
list($red, $blue, $green) = $colors;

echo "<br>" . $red . $blue . $green;

function retrieveUserProfile()
{
    $user[] = "Jason Gilmore";
    $user[] = "jason@example.com";
    $user[] = "English";
    return $user;
}

list($name, $email, $language) = retrieveUserProfile();
echo "<br>Name: $name,email: $email, language:$language";


$nums = array("1", "2", '3');
list($num1, $num2) = $nums;
echo "<br>" . $num1;
echo "<br>" . $num2;
echo "<br>" . $num1;