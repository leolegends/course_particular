<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementsController extends Controller
{
    private $valor;

    public function setValue($new_val = 0)
    {
        return $this->valor = $new_val;
    }

    public function calc($operator, $val)
    {
        switch($operator):
            case "-":
                return $this->subtracao($val);
            case "+":
                return $this->soma($val);
            case "*":
                return $this->multiplica($val);
            case "/":
                return $this->divisao($val);
            default:
                return null;
        endswitch;
    }

    private function subtracao($val)
    {
        return $this->valor - $val;
    }

    private function soma($val)
    {
        return $this->valor + $val;
    }

    private function multiplica($val)
    {
        return $this->valor * $val;
    }

    private function divisao($val)
    {
        return $this->valor / $val;
    }
}
