

<?php

function calculateElectricityBill($units) {
    if ($units <= 50) {
        $Amount = $units * 3.50;
    } elseif ($units <= 100) {
        $Amount = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $Amount = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $Amount = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }

    return $Amount;
}


$unitsConsumed = 180;
$electricityBill = calculateElectricityBill($unitsConsumed);

echo "Units Consumed: " . $unitsConsumed . "\n";
echo "Electricity Bill: Rs. " . $electricityBill . "\n";
?>