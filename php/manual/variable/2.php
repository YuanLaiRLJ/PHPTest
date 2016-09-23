<?php
class Example
{
    public $s = "unchanged";

    public function set()
    {
        $this->s = 'changed';
    }
}

$o = new Example;
$p = new Example;
$o->set();
print "\$o {$o->s}\n \$p {$p->s}";