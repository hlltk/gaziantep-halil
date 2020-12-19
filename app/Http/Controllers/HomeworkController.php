<?php

namespace App\Http\Controllers;

use App\Models\Add;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/


    public function store(Request $request)
    {
        $name = $request->get('name');
        $phone = $request->get('phone');

        Add::create([
            'name' => $name,
            'phone' => $phone,


        ]);
        return back();
    }

}
