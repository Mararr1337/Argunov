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
$text = "php opo LEVA sis";
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