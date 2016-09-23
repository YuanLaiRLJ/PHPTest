<?php
class printArray
{
    private $code = null;

    function __construct($val)
    {
        $this->code = $val;
        $this->_print();
    }

    private function arrayIterator($val, $grau)
    {
        $grau++;
        $arr = new \ArrayIterator($val);
        while ($arr->valid())
        {
            if (is_array($arr->current())) {
                $this->arrayIterator($arr->current(), $grau);
            } else {
                $this->code .= str_repeat(" ", (4 * $grau)) . $arr->key() . " : " . $arr->current() . PHP_EOL;
            }
            $arr->next();
        }
    }

    private function _print()
    {
        if (is_array($this->code)) {
            $arr = new \ArrayIterator($this->code);
            $this->code = 'array(' . PHP_EOL;
            while ($arr->valid()) {
                if (is_array($arr->current())) {
                    $this->arrayIterator($arr->current(), 0);
                } else {
                    $this->code .= $arr->key() . " : " . $arr->current() . PHP_EOL;
                }
                $arr->next();
            }
            $this->code .= ')';
        }
        return $this;
    }

    public function getVal()
    {
        return $this->code;
    }
}

$arr = array(
    array(
        'ok' =>1, array(9, 7, 5, 9, 'b' => array(1, 2)),
        'error' => 2, array('h', 'u', 'o')
    ),
    'array'
);
$pArray = new PrintArray($arr);
var_dump($pArray->getVal());