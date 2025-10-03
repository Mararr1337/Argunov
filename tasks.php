<?php
$rectSquare=0;
if(isset($_GET['rect'])){
    $rectSquare=$_GET['len']*$_GET
    ['width'];
}
?>
<h1>Задачи</h1>
<h2>ЗАдача 1 прЯмогульники</h2>
<form action="">
        <p>Введите длинну: <input type="text" name="len"></p>
        <p>Введите ширину: <input type="text" name="width"></p>
        <p><input type="submit" value="OK" name="rect"></p>
        <p><?= "Результат $rectSquare"; ?></p>
</form>

<?php
$rectSquare=0;
$cubevol=0;
if(isset($_GET['rect'])){
    $rectSquare=$_GET['len']*$_GET
    ['width'];
}
if(isset($_GET['cube'])){
    $rectSquare=$_GET['cube']*$_GET
    ['lenght'];
}
?>
<h1>Задачи</h1>
<h2>ЗАдача 1 прЯмогульники</h2>
<form action="">
        <p>Введите длинну: <input type="text" name="len"></p>
        <p>Введите ширину: <input type="text" name="width"></p>
        <p><input type="submit" value="OK" name="rect"></p>
        <p><?= "Результат $rectSquare"; ?></p>
</form>
<h1>Задачи</h1>
<h2>ЗАдача 2 обьем кеуба</h2>
<form action="">
        <p>Введите длинну: <input type="text" name="lenght"></p>
        <p><input type="submit" value="OK" name="cube"></p>
        <p><?= "Обьем куба =  $cubevol"; ?></p>
</form>