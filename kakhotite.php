<?php
$len=1;
$width=1;
for($i=1; $i<=9; $i++){
    for($j=1; $j<=9; $j++){
        echo $i*$j;
}
    echo '<br>';
}
$len=3;
$width=4;
for($i=1; $i<=$len; $i++){
    for($j=1; $j<=$width; $j++){
        echo 'X';
}
    echo '<br>';
}

