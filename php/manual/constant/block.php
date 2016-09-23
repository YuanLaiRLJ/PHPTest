<?php
$i = true;
if ($i) {
    $b = 2;
}
while($i) {
    $c = 3;
    $i = false;
}

function test() {
    $d = 2;
}
echo $b;
echo $c;
echo $d;