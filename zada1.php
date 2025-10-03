<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1 style="text-align: center;">Таблица умножения</h1>
<table border="1">
<?php
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <=9; $j++) {
    echo "<td style='width:40px;height:40px;text-align:center'>" .
    $i * $j . "</td>";
}
    echo "</tr>";
}
?>
</table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
<?php
echo "<tr>";
for ($i = 10; $i <= 99; $i++) {
    echo "<td> " . ($i**2) . "</td>";
    if ($i % 10 ==9) echo "</tr><tr>";
}
echo "</tr>";
?>
</table>
</body>
</html>

<?php
$width =6;
$height =4;
for ($i=1; $i<=$height; $i++) {
    for ($j=1; $j<=$width; $j++) {
        if ($i == 1 or $i== $height or $j ==1 or $j== $width) {
            echo "9";
        } else {
            echo "3";
        }
    }
    echo "<br>";
}
?>


<?php
$n = 50;
echo "Делители числа $n: ";
for ($i = 1; $i <= $n; $i++) {
    if ($n % $i == 0) {
        echo "$i ";
    }
}


$ch = 45;
$p = 1;
$c = $ch;
while ($c > 0) {
    $f = $c % 10;
    $p= $f*$p;
    $c =(int)($c / 10);
    echo "Произведение цифр числа $ch: $p", '<br>';
}
?>

<?php
$ch = 2;
$p = 2;
$c = $ch;
while ($c > 0) {
    $f = $c % 10;
    $p= $f*$p;
    $c =(int)($c / 10);
    echo "Произведение цифр числа $ch: $p", '<br>';
}

?>