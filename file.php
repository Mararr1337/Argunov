<?php

$text=file_get_contents(filename:'texts/test.txt');
if(!is_dir(filename:'texts1')){
mkdir(directory:'texts1');
}
file_put_contents(filename:'texts1/test.txt', data: $text.'HA!');

echo file_get_contents(filename:'texts1/test.txt');
?>