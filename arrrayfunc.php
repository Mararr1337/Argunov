<h2>Задание 1</h2>
<?php
$numbers = [3, 1, 53,543, 0, 4,7, 2];
$nach = array_search(0, $numbers);
$result = array_slice($numbers, 0, $nach + 1);
echo "Числа до нуля включительно: " . implode(', ', $result);
?>
<h2>Задание 2</h2>
<?php
$numb = [5, 2, 8, 1, 9, 3];
$min = min($numb);
$max = max($numb);
$numb = array_replace($numb, [
    array_search($min, $numb) => $max,
    array_search($max, $numb) => $min,
]);
echo "Массив после замены:", implode(', ', $numb);
?>
<h2>ЗАдание 3</h2>
<?php
$array = [0, 5, 8, 0, 3, 0, 1, 0];
$zero = array_keys($array, 0);
echo "Номера ноликов: " . implode(', ', $zero);
?>
<h2>Задание 4</h2>
<?php
$array = [0, 5, 8, 0, 3, 0, 1, 0];
$filter = array_filter($array, function($val) {
    return $val != 0;
});
echo "Массив без ноликов: " . implode(', ', $filter);
?>
<h2>Задание 5</h2>
<?php
$array = [2 => 'z', 5 => 'x', 1 => 'c'];
$pereindex = array_values($array);
?>