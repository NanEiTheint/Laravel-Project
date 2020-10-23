<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheVoiceController extends Controller
{
    public function home($value='')
    {
    	return view('index');
    }
     public function winner1($value='')
    {
        return view('winner1');
    }
     public function winner2($value='')
    {
        return view('winner2');
    }
     public function coach($value='')
    {
        return view('coach');
    }
      public function battle1($value='')
    {
        return view('battle1');
    }
      public function battle2($value='')
    {
        return view('battle2');
    }
      public function blind1($value='')
    {
        return view('blindAudition1');
    }
      public function blind2($value='')
    {
        return view('blind2');
    }
      public function blind3($value='')
    {
        return view('blind3');
    }
      public function final1($value='')
    {
        return view('final1');
    }
      public function final2($value='')
    {
        return view('final2');
    }
      public function knock2($value='')
    {
        return view('knock2');
    }
      public function live1_1($value='')
    {
        return view('live1_1');
    }
      public function live1_2($value='')
    {
        return view('live1_2');
    }
      public function live2($value='')
    {
        return view('live2');
    }
      public function semiFinal1($value='')
    {
        return view('semiFinal1');
    }
     public function semiFinal2($value='')
    {
        return view('semiFinal2');
    }


     public function about($value='')
    {
    	return view('about');
    }
     public function contact($value='')
    {
    	return view('contact');
    }
    public function service($value='')
    {
      $students = array(
                    array('name'=>'mgmg','age'=>22),
                    array('name'=>'khinkhin','age'=>21),

      );
      return view('service',['studentarr'=>$students]);
    }
}

