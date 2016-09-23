<?php
$begin_time = microtime();
$arr = array("foo" => array(3 => 'hello'));
$end_time = microtime();
echo $arr['foo'][3];
echo $end_time - $begin_time;