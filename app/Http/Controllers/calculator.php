<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculator extends Controller
{
    
    public function Index(Request $request){

        $a = 0;
        if ($request->action == "division") {

            $a = $request->numberOne / $request->numberTwo;
            return view("calculator")->with("a", $a);
        }
        if ($request->action == "multiplication") {

            $a = $request->numberOne * $request->numberTwo;
            return view("calculator")->with("a", $a);
        }
        if ($request->action == "subtraction") {

            $a = $request->numberOne - $request->numberTwo;
            return view("calculator")->with("a", $a);
        }
        if ($request->action == "addition") {

            $a = $request->numberOne + $request->numberTwo;
            return view("calculator")->with("a", $a);
        }

        dd($request);
        return view("calculator");        
    }

}