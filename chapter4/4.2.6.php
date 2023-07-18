<?php
function amortizationTable($pNum, $periodicPayment, $balance, $monthlyInterest)
{
    //计算支付利息
    $paymentInterest = round($balance * $monthlyInterest, 2);
    //计算还款额
    $paymentPrincipal = round($periodicPayment - $paymentInterest, 2);
    //用余额减去还款额
    $newBalance = round($balance - $paymentPrincipal, 2);
    if ($newBalance < $paymentPrincipal) {
        $newBalance = 0;
    }

    printf("<tr><td>%d</td>", $pNum);
    printf("<td>$%s</td>", number_format($newBalance, 2));
    printf("<td>$%s</td>", number_format($periodicPayment, 2));
    printf("<td>$%s</td>", number_format($paymentPrincipal, 2));
    printf("<td>$%s</td></tr>", number_format($paymentInterest, 2));
    if ($newBalance > 0) {
        $pNum++;
        amortizationTable($pNum, $periodicPayment, $newBalance, $monthlyInterest);
    } else {
        return 0;
    }
}

$balance = 10000.00;
$interestRate = .0575;
$monthlyInterest = $interestRate / 12;
$termLength = 5;
$paymentsPerYear = 12;
$paymentNumber = 1;
$totalPayments = $termLength * $paymentsPerYear;
$intCalc = 1 + $interestRate / $paymentsPerYear;
$periodicPayment = $balance * pow($intCalc, $totalPayments) * ($intCalc - 1) / (pow($intCalc, $totalPayments) - 1);
$periodicPayment = round($periodicPayment, 2);
echo "<table width='50%' align='center' border='1'>";
echo "<tr>
      <th>Payment Number</th>
      <th>Balance</th>
      <th>Payment</th>
      <th>Principal</th>
      <th>Interest</th>
      </tr>
      ";
amortizationTable($paymentNumber, $periodicPayment, $balance, $monthlyInterest);
echo "</table>";

?>