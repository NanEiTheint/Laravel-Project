<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public  function home($value='')
	{
		return view('welcome');
	}
	public function zpage($value='')
	{
		return "Hello z page";
	}
	public function testingpage($value='')
	{
		return view('testing');
	}
 }
