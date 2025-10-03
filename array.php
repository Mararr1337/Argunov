<?php

$nums= [1,2,5,15,8];
$max=$nums[0];
$min=$nums[0];
foreach($nums as $num){
    if($num<$max){
        $max=$num;
}   if($num>$min){
        $min=$num;
}
}
echo"Максимальное значение в массиве max равно: $min", '<br>';
echo"Минимальное значение в массиве max равно: $max";

echo"<h2>Задание 2</h2>";
$nums= [1,2,3,4,5];
$sum=$nums[0];
$s=$nums[0];
foreach ($nums as $num){  
    $sum += $num;  
    $s = $num*$s;  
}
echo "Сумма элементов:  $sum",'<br>';  
echo "Произведение элементов: $s";  

echo"<h2>Задание 3</h2>";
$nums= [10,20,40,60];  
$sums = array_sum($nums);  
$sr = $sums/count($nums);  
echo "Среднее арифметическое: $sr";

echo"<h2>Задание 4</h2>";
 
$nums = [-2, 3, 1, 4, -5];  
$p=[];  
foreach ($nums as $num){  
    if ($num>0){  
        $p[]=$num *$num;  
    } elseif ($num<0){  
        $p[]=abs($num);  
    } else{
        $p=$num;
    }
}
echo "Исходный массив ".'<br>';
foreach($nums as $u)
    echo $u, '<br>';
echo "Преобразованный массив".'<br>';
foreach($p as $d)
    echo $d,'<br>';

echo"<h2>Задание 5</h2>";
$nums = [20, 30, 40, 50, 60, 80, 90,];   
foreach ($nums as $ind=>$val) {  
    if ($ind % 2 == 0) {  
        echo "Элемент с индексом $ind: $val", '<br>';  
    }  
}    

echo"<h2>Задание 6</h2>";

