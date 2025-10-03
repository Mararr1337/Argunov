<?php
$a=1;
$b=1;
if(isset($_GET)){ 
    $a=$_GET['a'];
    $b=$_GET['b'];
}if($a<$b){
    $c=$a+$b;
}else{
    $c=$a*$b;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="">
        <p>Введите a: <input type="text" name="a"></p>
        <p>Введите b: <input type="text" name="b"></p>
        <p><input type="submit" value="Отправить"></p>
        <p><?= "Результат $c"; ?></p>
        </form>
</body>
</html>

<?php
    $a = $_GET['a'];
    $b = $_GET['b'];
if($a + $b < 180){
    echo'Треугольник существует';
}else{
    echo'Треугольника не существует';
}
if($a <= 90 or $b <= 90 or 180-($a+$b)==90){
    echo'Он является прямоугольным';
}else{
    echo'Он не является прямоугольным';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p>Введите угол a <input type = "text" name="a"></p>
        <p>Введите угол b<input type = "text" name="b"></p>
        <p><input type="submit" value="отправить"></p>
    <form>
</body>
</html>

<?php

if(isset($_GET)) 
    $age=$_GET['age'];
if ($age <= 1) {
    $ageGroup = 'Котята';
} elseif ($age > 1 && $age <= 3) {
    $ageGroup = 'Молодые коты';
} elseif ($age > 3 && $age <= 7) {
    $ageGroup = 'Коты средних лет';
} else {
    $ageGroup = 'Почтенные коты';
}

echo $ageGroup;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p>Введите Возраст: <input type="text" name="age"></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
</body>
</html>


<?php

    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];

if (($a + $b > $c) and ($a + $c > $b) and ($b + $c > $a)) {
    echo "Треугольник существует.";
} else {
    echo "Треугольник не существует.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p>Введите сторону a: <input type="text" name="a"></p>
        <p>Введите сторону b: <input type="text" name="b"></p>
        <p>Введите сторону c: <input type="text" name="c"></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
</body>
</html>

<?php
    $A = $_GET['A'];
    $B = $_GET['B'];
$maxi = 32767;
if (($B>0 and $A>$maxi-$B) || ($B<0 and $A<-$maxi-$B)) {
    echo "При сложении произойдет переполнение.";
} else {
    $sum=$A+$B;
    if ($sum > $maxi) {
        echo "Сумма превышает 32767.";
    } else {
        echo "Сумма чисел: " . $sum ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p>Введите число A: <input type="text" name="A"></p>
        <p>Введите число B: <input type="text" name="B"></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
</body>
</html>