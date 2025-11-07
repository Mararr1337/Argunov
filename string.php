<?php

// $str="Hellooworld!";
// for($i=0; $i<mb_strlen($str); $i++) {
// echo $str[$i],'<br>';
// }
// echo mb_strlen($str);
echo "<h2>Задание 1</h2>";
$str = "Hellorujyi(Worldyhtyjtydfhjnbhvnkl)sadgtsert!";
$open = -1;
$close = -1;
for ($i=0; $i<mb_strlen($str); $i++) {
    if ($str[$i] == "(" ){
        $open = $i;
        break; 
    }
}
for ($i = $open + 1; $i<mb_strlen($str); $i++) {
    if ($str[$i] == ")") {
        $close = $i;
        break;
    }
}
for ($i = $open + 1; $i < $close; $i++) {
    echo $str[$i];
}
echo "<h2>Задание 2</h2>";
$str = "Hello World!";
$o=1;
for ($i=0; $i<mb_strlen($str); $i++){
       if ($str[$i] ==" "){
        $o++;
    }
}
echo $o, '<br>';
echo "<h2>Задание 3</h2>";
$text = "php opo LEVAL sis";
$words = explode(' ', $text);
$res = [];
foreach ($words as $word) {
    $len = strlen($word);
    if ($len > 0 and $word[0] ==$word[$len - 1]) {
        $res[] = $word;
    }
}
echo "Слова, которые начинаются и заканчиваются одной буквой:";
foreach ($res as $word) {
    echo "  $word";
}
echo "<h2>Задача 1</h2>";
$string="Лева(арик)марат";
$open = strpos($string, '(');
$close = strpos($string, ')');
$result = substr($string, $open + 1, $close - $open- 1);
echo $result;

echo "<h2>Задача 2</h2>";
$strng = "Hello World.";
$pos = strpos($strng, '.');
$bezt= substr($strng, 0, $pos);
$word = explode(' ', $bezt);
$validW = [];
foreach ($word as $words) {
    if ($words !== '') {
        $validW[] = $word;
    }
}
$wordC = count($validW);
echo "Количество слов: " , $wordC;

echo "<h2>Задание 3</h2>";
$text = "php opo rogue sis";
$words = explode(' ', $text);
$res = array_filter($words, function($word) {
    $len = strlen($word);
    return $len > 0 and $word[0] == $word[$len - 1];
});
echo "Слова, которые начинаются и заканчиваются одной буквой:";
foreach ($res as $word) {
    echo "  $word";
}

echo "<h2>Задание 4</h2>";
$txt = "hello world 123.";
$chars = str_split($txt);
$uni = "";
foreach ($chars as $char) {
    if (strpos($uni, $char) == false) {
        $uni .= $char;
    }
}
$uniq = str_split($uni);
echo "Различные символы в строке: " . implode(' ', $uniq);
echo "Всего различных символов: " . strlen($uni);