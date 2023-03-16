<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function testData()
    {
        // $fruits = array('mango','orange','apple','pineapple','banana');
        //   return view('users',['fruits'=>$fruits]);
        return view('my_components'); //form
    }

    public function formView()
    {
         /**********************************************************************************************
          *
          adasdiuer98erwewedeererasdasd
          */
        return view('form'); //form
    }

}
