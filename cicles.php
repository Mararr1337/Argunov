<?php
$startNumber=1;
$multiplier=3;
$quantity=7;

for ($i = 0; $i <= $quantity; $i++) {
    echo $startNumber, '<br>';
    $startNumber =$startNumber* $multiplier;
}
?>

<?php
$lastNumber = 10;
$sum = 0;
for ($i = 0; $i <= $lastNumber; $i++) {
    $sum += $i; 
}
echo "Сумма от 1 до $lastNumber равна $sum.";
?>

<?php
$lastNumber = 8; 
$multiplicationResult = 1;
for ($i = 2; $i <= $lastNumber; $i++) {
    if ($i % 2 == 0) {
        $multiplicationResult *= $i; 
    }
}
echo "Произведение чётных чисел от 1 до $lastNumber равно $multiplicationResult.";
?>

<?php
$n = 3; 
$distance = 10; 
$total = 0;

for ($i = 1; $i <= $n; $i++) {
    $total += $distance;
    $distance = $distance * 1.10; 
}
echo "За $n дней бегун пробежит: " . $total . " км";
?>

<?php
echo "Гуси или Лебеди", '<br>';
for ($g = 0; $g <= 32; $g++) {
    $legs = 64 - ($g * 2);
    if ($legs >= 0 and $legs % 4 == 0) {
        $l = $legs / 4;
        echo "$g  или $l", '<br>';
    }
}
?>