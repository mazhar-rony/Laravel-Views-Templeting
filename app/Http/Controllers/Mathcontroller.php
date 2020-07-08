<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mathcontroller extends Controller 
{
    public function multy($number1)
    {
        $multy = $number1 * 10;
        
        return view('multy', [ 'result' => $multy, 'name' => 'My Name Is RONY' ]);
    }

    public function sum($num1, $num2)
    {
        //return "summation";

        $result = $num1 + $num2;

       /* 1 no way to pass data to view
        $data = [
            'res' => $result
        ];

        return view('sum',$data);*/

        // 2 no way to pass data to view
        //return view('sum')->with('res', $result)->with('num1', $num1);

        $data = ['name' => 'Rony', 'roll' => 123, 'phone' => '01911913250'];
        //$data = [];

        // 3 no way to pass data to view
        return view('sum', compact('result', 'num1', 'num2', 'data'));
    }

    public function sub()
    {
        //return "subtraction";

        //dd(request());

        $uri = request()->path();
        $url = request()->url();
        $method = request()->method();

        return $method;
    }

    public function mul()
    {
        return "multiplication";
    }
}