<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\hello;

class myController extends Controller
{
    //

    public function test(){
    /*	$users = hello::where('id',1)
    					->get();
    	dd($users);*/

    	for($i=0;$i<10;$i++){

		echo "current number is : ";echo $i; echo "</br>";

		}

	}
}
