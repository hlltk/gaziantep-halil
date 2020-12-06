<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
     public function showView ()
     {
         $users = DB::table('users')->get();
        return view('hakkimda' ,compact('users'));
    }
    public function showUrunler ()
    {
        $products = DB::table('products')->get();
        return view('urunler' , compact('products'));
    }
    public function showUsers ()
    {
        $user_products = DB::table('user_products')->get();
        return view('tablehm' , compact('user_products'));
    }
}

