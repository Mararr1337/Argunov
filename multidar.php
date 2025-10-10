<?php
$students=[
    ['name'=>'Иванов Иван', 'group'=>'ИВ1к-24','course'=>1],
    ['name'=>'Иванов Игорь', 'group'=>'ИВ1-24-1','course'=>1],
    ['name'=>'Иванов Иван', 'group'=>'ИВ1к-24','course'=>2],
    ['name'=>'Иванов Иван', 'group'=>'ИВ1к-24','course'=>3],
];
foreach($students as $student){
    echo"Имя: {$student['name']}, Группа: 
    {$student['group']},Курс: {$student ['course']}";
echo'<br>';
}

echo"<h2>Задание 1<h2>";
$array = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];
echo "<table border='1'>";
foreach ($array as $row) {
    echo "<tr>";
    foreach ($row as $c) {
        echo "<td>$c</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo"<h2>Задание 2<h2>";
$num = [];
for ($i = 10; $i <= 99; $i++) {
    $num[] = $i * $i;
}
$size = 10; 
echo "<table border='2'>";
for ($row=0; $row<$size; $row++) {
    echo "<tr>";
    for ($c=0; $c<$size; $c++) {
        $ind=$row * $size + $c;
        if ($ind<count($num)) {
            echo "
            <td>
            {$num[$ind]}
            </td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
echo"<h2>Задание 3<h2>";
$array = [
    [1, 2, 3, 4],
    [5, 6, 9, 7],
    [8, 10, 30, 25],
    [20, 19, 27, 39],
    [14, 21, 31, 45]
];
$min=$array[0][0];
$max =$array[0][0];
$maxp = [1, 1];
$minp = [0, 0];

foreach ($array as $i => $row) {
    foreach ($row as $j => $val) {
        if ($val>$max) {
            $max = $val;
            $maxp = [$i, $j];
        }
        if ($val<$min) {
            $min = $val;
            $minp = [$i, $j];
        }
    }
}
echo "Массив:", '<br>';
foreach ($array as $row) {
    echo implode( ' ',$row),'<br>';
}
echo "Максимум: $max, его индекс: " .$maxp[0], $maxp[1]."",'<br>';
echo "Минимум: $min, его индекс: " .$minp[0] , $minp[1]."";
