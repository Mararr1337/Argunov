<?php
echo"<h2>Задание 1</h2>";
$dig = 6;
{if(isset($_GET['task 1']));
    $dig=(int)$_GET['task 1'];
}
$digit = match($a){
    1=>'one',
    2=>'two',
    3=>'three',
    4=>'four', 
    5=>'five', 
    6=>'six', 
    7=>'seven',
    8=>'eight',
    9=>'nine',
    10=>'ten',
    default => 'Нет такой цифры',
    
};

echo $digit;
echo"<h2>Задание 2</h2>";
$a = 6;
$digit= match($a){
    1=>'1:январь 1 января — Новый год, 7 января — Рождество',
    2=>'23 февраля - день защитника отечества',
    3=>'8 марта - международный женский день',
    4=>'1 апреля - день шуток', 
    5=>'1 мая - мир труд май', 
    6=>'12 июня - День России', 
    7=>'30 июля - Международный день дружбы',
    8=>'1 августа - день памяти Российским войнам, погибшим в 1 Мировой войне',
    9=>'1 сентября - День знаний',
    10=>'5 октября- день учителя',
    11=>'4 ноября - день народного единства ',
    12=>'12 декабрь - день конституции рф',
    default => 'Нет такой цифры',
};
echo $digit;

echo"<h2>Задание 3</h2>";
    $num = 11;
    $k= $num **2;    
    $f=$k % 10;  
echo "Поледняя цифра квадрата числа $k равна: $f ";

echo"<h2>Задание 4</h2>";
$w = "лет";
$last = $k % 10;
$k=$_GET['age'];
        switch ($last){
            case $last==1 and $k!=11;
                $w = "год";
                break;
            case $last =2 and $last= 4 and ($k<10 or $k>20);
                $w = "года";
                break;
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
        <p>Введите возраст: <input type="text" name="age"></p>
        <p><input type="submit" value="Оk"></p>
    </form>
    <p><?php "мой возраст: $k $w "; ?></p>
</body>
</html>
