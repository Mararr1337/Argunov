<?php
$a = 1;
switch($a){
    case 1:
        $b="один";
        echo $b, '<br>';
        break;
    case 2:
        echo "два", '<br>';
        break;
    case 5:
        echo "пять", '<br>';
        break;    
    case 10:
        echo "десять", '<br>';
        break;
    default:
    echo'Ничего не совпало ';
        
}
if($a==1){
    $b="один";
    echo $b;
}elseif($a==2){
    echo'два';
}

echo"<h2>ЗАдание 3</h2>";
$a = 1;
switch($a){
    case 1:
        $b="one";
        echo $b, '<br>';
    case 2:
        echo "two", '<br>';
    case 3:
        echo "three", '<br>';
    case 4:
        echo "four", '<br>';
    case 5:
        echo "five", '<br>';
    case 6:
        echo "six", '<br>';
    case 7:
        echo "seven", '<br>';
    case 8:
        echo "eight", '<br>';
    case 9:
        echo "nine", '<br>';
    case 10:
        echo "ten", '<br>';
        break;
    default:
    echo'Ничего не совпало ';
        
}
echo"<h2>ЗАдание 3</h2>";
$a = 2;
switch($a){
    case 1:
        $b="1:январь 1 января — Новый год, 7 января — Рождество";
        echo $b, '<br>';
        break;
    case 2:
        echo "23 февраля - день защитника отечества", '<br>';
        break;
    case 3:
        echo "8 марта - международный женский день", '<br>';
        break;
    case 4:
        echo "1 апреля - день шуток", '<br>';
        break;
    case 5:
        echo "1 мая - мир труд май", '<br>';
        break;
    case 6:
        echo "12 июня - День России", '<br>';
        break;
    case 7:
        echo "30 июля - Международный день дружбы", '<br>';
        break;
    case 8:
        echo "1 августа - день памяти Российским войнам, погибшим в 1 Мировой войне", '<br>';
        break;
    case 9:
        echo "1 сентября - День знаний", '<br>';
        break;
    case 10:
        echo "5 октября- день учителя", '<br>';
        break;
    case 11:
        echo "4 ноября - день народного единства ", '<br>';
        break;
    case 12:
        echo "12 декабрь - день конституции рф", '<br>';
        break;
    default:
    echo'Ничего не совпало ';   
}



echo"<h2>ЗАдание 3</h2>";
    $num = 11;
    $k= $num **2;    
    $f=$k % 10;  
echo "Поледняя цифра квадрата числа $k равна: $f ";

echo"<h2>ЗАдание 4</h2>";
$w = "лет";
$last = $k % 10;
        switch ($last){
            case 1:
                $w = "год";
                break;
            case 4:
                $w = "года";
                break;
            default: 
                $w = "лет";
                break;
        } 
?>
<?php  
$w = "лет";
$last = $k % 10;
        switch ($last){
            case 1:
                $w = "год";
                break;
            case 4:
                $w = "года";
                break;
            default: 
                $w = "лет";
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
    <p><?php "Возраст: $k "; ?></p>
    <p><?php "Возраст: $w "; ?></p>
</body>
</html>
