<?php 
try{
    $a='k';
    $b='2';
    if(!$b){
        throw new DivisionByZeroError('НА 0 делить нельзя!');
    }
    if(!is_numeric($a) or !is_numeric($b)){
        throw new TypeError('a и b не являются числами!');
}
$result = $a/$b;
echo $result,'<br>';
}catch(DivisionByZeroError $ex){
    echo"proizoshlo iskl: {$ex->getMessage()}",'<br>';
}catch(TypeError $ex){
    echo"oshibka tipa:{$ex->getMessage()}",'<br>';
}catch(Throwable $ex){
    echo "oshibka: {$ex->getMessage()}",'<br>';
}
echo 'ПРограмма прордолжается','<br>';