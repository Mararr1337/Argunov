<?php

$n=11;

if($n==6){
    $str='Число бьольше 6';
    echo $str, "<br>";
}elseif($n<=10){
    $str='Число больше 6 но меньше 10';
    echo $str;
}elseif($n<=15){
    $str='Число больше 10 но меньше 15';
    echo $str;
}else{
    $str='Число больше 15';
    echo $str;
}
