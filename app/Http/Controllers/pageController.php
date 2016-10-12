<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pageController extends Controller
{
    //
    public function hello() 
    {
    	//return "hello world";
    	$name = "Jhon";
    	$surname = "Doe"; 
    	$friends = ['Marc', 'Abby', 'Nick']; 

    	return view('welcome') ->with([
    		'name' => $name,
    		'surname' => $surname,
    		'friends' => $friends, 
    		]);
    }
}
