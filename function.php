<h1>Функции</h1>
<?php
// function sayHello($name)
// {
//     echo"<p>Привет, $name!</p>";
// }
// $userName="Вася";
// sayHello(name: $userName);

// function multArray($numbers) 
// {  $result = 1;
// foreach ($numbers as $number) {
//         $result *= $number;
// }
//         return $result;
// }
// $nums = [2,4,7,8,9];
// echo multArray(numbers:$nums),'<br>';

function lengcirc($d) {
        return $d*2*3.14;
}
echo lengcirc(10);

?>
<h2>Задача 2</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
            <p>Введите сторону треугольника: <input type="text" name="a"></p>
            <p>Введите сторону треугольника: <input type="text" name="b"></p>
            <p>Введите сторону треугольника: <input type="text" name="c"></p>
            <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>
<?php
     function trsquare($a, $b,$c) {
    $p=($a +$b+$c)/2;
     if($a + $b<$c or $a + $c < $b or $b + $c < $a){
        return 0;
     }else{
     $s= sqrt($p*($p - $a)*($p -$b)*($p-$c));
     return $s;
    }
}
     echo trsquare($_GET['a'], $_GET['b'], $_GET['c']);
        ?>
        <h2>ЗАдача 3</h2>

<?php
function ND($num) {
    $larg = 1; 
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0 and $i != $num) {
            $larg = $i;
        }
    }
 return $larg;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Н</title>
</head>
<body>
    <form method="post">
        <tr>
        <label>Введите число:</label>
        <input type="number" name="number" required>
        <button type="submit"></tr>
            Найти 
        </button>
    </form>

    <?php
    if (isset($_POST['number'])) {
        $num = intval($_POST['number']);
        $result = ND($num);
        echo "<p>Наибольший делитель числа $num это $result</p>";
    }
    ?>
</body>
</html>
 <h2>Задание 4</h2>
<?php
function alld($numbers) {
    $d = [];
    for ($i = 1; $i <= $numbers/2; $i++) {
        if ($numbers % $i == 0) {
            $d[] = $i;
        }
    }
    return $d;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Делители числа</title>
</head>
<body>
    <form method="post">
        <label>Введите число:</label>
        <input type="numb" name="numb" >
        <button type="submit">Найти</button>
    </form>

    <?php
    if (isset($_POST['numb'])) {
        $numbers = intval($_POST['numb']);
        $d = alld($numbers);
        echo "<p>Делители числа $numbers: " , implode(' ,', $d), "</p>";
    }
    ?>
</body>
</html>
<?php
function sumSquares($numbers) {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num * $num;
    }
    return $sum;
}

if (isset($_POST['numbers'])) {

}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<title>Сумма квадратов чисел</title>
</head>
<body>
<h2>Введите числа через запятую или пробел</h2>
<form method="post">
    <input type="text" name="numbers" placeholder="например, 1, 2, 3, 4" required>
    <button type="submit">Посчитать</button>
</form>

<?php
if (isset($result)) {
    echo "<p>Сумма квадратов: $result</p>";
}
?>
</body>
</html>