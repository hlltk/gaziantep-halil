<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Notifications\WelcomeNotification;

class SMSController extends Controller
{

public function sms(){
   $basic  = new \Nexmo\Client\Credentials\Basic('c88f5954', 'noyIiWuDg7ShZJa2');
    $client = new \Nexmo\Client($basic);
    $sifre=mt_rand(100000,999999);

    $message = $client->message()->send([
        'to' => '905462356960',
        'from' => '05462356960',
        'text' => 'Yeni Sifreniz: ' .$sifre

    ]);
    return view('/sms-sending');
}

    public function create()
    {
        return view('sms.sending');

    }
    public function store(Request $request)
    {
        $name = $request->get('name');
        $phone = $request->get('phone');

        User::create([
            'name' => $name,
            'phone' => $phone,


        ]);
        return back();
    }






}
