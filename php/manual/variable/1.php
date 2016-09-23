<?php
class Example
{
    public static $s = "unchanged";

    public function set()
    {
        $this::$s = 'changed';
    }
}

$o = new Example;
$p = new Example;
$o->set();
print "\$o static: {$o::$s}\n \$p static: {$p::$s}";