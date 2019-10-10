<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test()
    {
        $test = [
            'nome' => "Leonardo | Yuri",
        ];

        dd($test);
    }
}
