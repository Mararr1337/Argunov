
<h3>Задание 1: Введите ФИО</h3>
<form method="POST">
    Фамилия: <input type="text" name="lastname"><br>
    Имя: <input type="text" name="firstname" ><br>
    Отчество: <input type="text" name="surname"><br>
    <input type="submit" name="FIO" value="Отправить">
</form>
<?php
if (isset($_POST['FIO'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname']; 
    $surname = $_POST['surname'];
    echo "ФИО: $lastname $firstname $surname<br><br>";
}
?>

<h3>Задание 2: Делители числа</h3>
<form method="POST">
    Число: <input type="number" name="number">
    <input type="submit" name="dividers" value="Найти делители">
</form>
<?php 
if (isset($_POST['dividers'])) {
    $numb = $_POST['number'];
    echo "Делители чисда $numb: ";
    for ($i = 1; $i <= $numb; $i++) {
        if ($numb % $i == 0) echo "$i ";
    }
}
?>
<h3>Задание 3: Найти площадь треугольника</h3>
<form method="POST">
    Сторона 1: <input type="number" name="a"><br>
    Сторона 2: <input type="number" name="b"><br>
    Сторона 3: <input type="number" name="c"><br>
    <input type="submit" name="triangle" value="Найти площадь">
</form>
<?php 
if(isset($_POST['triangle'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
}
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        $p = ($a + $b + $c) / 2;
        $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        echo "Площадь треугольника = " ,round($s, 2) , "<br>";
    } else {
        echo "Треугольника не существует<br>";
    }
?>
