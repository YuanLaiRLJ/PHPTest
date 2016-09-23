<?php
$array = array(
    "one" => array(
        2,
        3,
    ),
    "two" => array(
        2,
        3,
    ),
);
var_dump(array_sum(array_column($array, "one")));