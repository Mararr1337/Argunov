<h2>Задание 1</h2>
<?php
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evenNumbers = array_filter($nums, function($num) {
    return $num % 2 == 0;
});
if (empty($evenNumbers)) {
    echo "Четных чисел в массиве нет";
} else {
    echo "Четные числа: " . implode(', ', $evenNumbers);
}
?>
<h2>Задание 2</h2>
<?php
$nums = [1,2,3,4,5];
$cub = array_map(function($num) {
    return $num**3;
}, $nums);
echo "Исходный массив: " . implode(', ', $nums),'<br>';
echo "Кубы чисел: " . implode(', ', $cub);
?>
<h2>Задание 3</h2>
<?php
$nums = [1,2,3,4,5,6,7,8,9,10];
$sum = array_reduce($nums, function($carry, $item) {
    return $carry + $item;
}, 0);
$arithmet = $sum/count($nums);
$product = array_reduce($nums, function($carry, $item) {
    return $carry * $item;
}, 1);
$geometr= pow($product, 1/count($nums));

echo "Массив: " . implode(', ', $nums),'<br>';
echo "Среднее арифметическое: " ,$arithmet,'<br>';
echo "Среднее геометрическое: " ,$geometr;
?>
<h2>Задание 4</h2>
<?php
$students = [
    ['name' => 'Вася', 'birth' => 2005, 'height' => 175],
    ['name' => 'Паша', 'birth' => 2006, 'height' => 165],
    ['name' => 'Даша', 'birth' => 2005, 'height' => 180],
    ['name' => 'Саша', 'birth' => 2007, 'height' => 160]
];
$talStudents = array_filter($students, function($student) {
    return $student['height']>170;
});
echo "Количество студентов выше 170см: " ,count($talStudents),'<br>';
$name = array_map(function($student) {
    return $student['name'];
}, $talStudents);
echo "Их имена : " ,implode(', ', $name);
?>
<h2>Задание 5</h2>
<?php
$numbs = [-4,-3,-2,-1,0,1,2,3,4];
$neg=count(array_filter($numbs, function($n) {
    return $n<0;
}));
 $zer0=count(array_filter($numbs, function($n) {
    return $n==0;
}));
$posit=count(array_filter($numbs, function($n) {
    return $n>0;
}));
echo "Отрицательных чисел: $neg",'<br>';
echo "Нулей:", $zer0, '<br>';
echo "Положительных чисел:", $posit;
?>
<h2>Задание 6</h2>
<?php
$numbs = [-4,-3,-2,-1,0,1,2,3,4];
$k=1;
$neg=count(array_filter($numbs, function($n) use ($k) {
    return $n<$k;
}));
 $zer0=count(array_filter($numbs, function($n) use ($k) {
    return $n==$k;
}));
$posit=count(array_filter($numbs, function($n) use ($k) {
    return $n>$k;
}));
echo "Меньше числа k: $neg",'<br>';
echo "равные числу k:", $zer0, '<br>';
echo "больше числа k:", $posit;
?>
<h2>Задание 7</h2>
<?php
$numbers = [10, 15, 20, 25, 30, 35, 40, 45, 50];
$M = 10;
$L = 25;
$N = 50;
$result = count(array_filter($numbers, function ($n) use ($M, $N,$L){
return $n % $M == 0 and $n >= $L and $n <= $N;
}));
echo "Количество чисел кратных $M в промежутке [$L, $N]: $result";
?>