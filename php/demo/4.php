<?php
// 返回变量的json格式
// 注意如果二维数组存在键值，则会转换成json对象，如果没有键值，转换为json数组
$arr = array('a' =>  array(3, 2 => 4, 5), 'b' => array(1, 2, 3), 'c' => 3, 'd' => 4, 'e' => 5);
echo json_encode($arr) . "\n";
// json对象的属性必须加上分号
$a = array('<foor>', '"bar"', "'baz'", '&blong&', "\xc3\xa9");
