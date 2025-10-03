<?php  

$days = array(  
"monday" => "понедельник", 
"tuesday" => "вторник",  
"wednesday" => "среда",  
"thursday" => "четверг",  
"friday" => "пятница", 
"saturday" => "суббота",  
"sunday" => "воскресенье",  
"january" => "январь",  
"february" => "февраль",  
"march" => "март"  
);  
foreach ($days as $eng => $rus) {  
    echo "$eng - $rus", '<br>';  
}  

echo '<h2>Задание 2<h2>';
$slova = [
"monday" => "понедельник", 
"tuesday" => "вторник",  
"wednesday" => "среда",  
"thursday" => "четверг",  
"friday" => "пятница", 
"saturday" => "суббота",  
"sunday" => "воскресенье",  
"january" => "январь",  
"february" => "февраль",  
"march" => "март"
];
$w = 'один';
if (isset($slova[$w])) {
    echo "$w , $slova[$w]";
}else{ 
    echo ' нет такого слова';
}

echo '<h2>Задание 3<h2>';
$slova = [
"monday" => "понедельник", 
"tuesday" => "вторник",  
"wednesday" => "среда",  
"thursday" => "четверг",  
"friday" => "пятница", 
"saturday" => "суббота",  
"sunday" => "воскресенье",  
"january" => "январь",  
"february" => "февраль",  
"march" => "март"  
];
$w = 'marat';
if (isset($slova[$w])) {
    echo " $slova[$w]";
} else {
    foreach ($slova as $rus => $en) {
        if (isset($eng) and $eng == $slova) {
            echo $eng . $rus,'<br>';

        }
    }
}
            echo"Такого слова нет",'<br>';

echo '<h2>Задание 5<h2>';
?>
<?php
$slova = [
"monday" => "понедельник", 
"tuesday" => "вторник",  
"wednesday" => "среда",  
"thursday" => "четверг",  
"friday" => "пятница", 
"saturday" => "суббота",  
"sunday" => "воскресенье",  
"january" => "январь",  
"february" => "февраль",  
"march" => "март"  
];
$w = 'monday';
if (isset($slova[$w])) {
    echo " $slova[$w]";
} else 
            echo"Такого слова нет",'<br>';
{
    foreach ($slova as $rus => $eng) {
        if (isset($eng) and $eng == $slova) {
            echo $eng . $rus,'<br>';

        }
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
        <p>Введите слово: <input type="text" name="word"></p>
        <p><input type="submit" value="Отправить"></p>
        <p><?php echo "Перевод:  $eng"; ?></p>
    </form>
</body>
</html>
