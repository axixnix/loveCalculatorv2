<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoveCalculatorController extends Controller
{
    //
    public function result(Request $request){

        $firstName = $request->input('firstName');
        $secondName = $request->input('secondName');
        $name1 = str_split($firstName);
        $name2 = str_split($secondName);
        $firstCount = count($name1);
        $secondCount = count($name2);
        $intersectionCount =count(array_intersect($name1,$name2));
        $ans =(($intersectionCount * 2)/($firstCount + $secondCount)) * 100;
        

        return response()->json('binary oracle has determined that '.$firstName.' '.'and'.' '.$secondName.' '.'are'.' '.number_format($ans,2).'%'.' '.'compatible');

    }
}
