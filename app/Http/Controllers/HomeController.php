<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
     public function showView ()
     {
         $name = "Ali";
         $job = "Student";
         $city= "Gaziantep";
        return view('hakkimda' , compact('name','job','city'));
    }

}
