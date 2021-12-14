<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Nexmo\Laravel\Facade\Nexmo;

class SMSController extends Controller
{
    public function sendMessage()
    {
  

        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
        'to' => '+9779804341426' ,
        'from' => '+9779804341426' ,
        'text' => ' To confrim that this is your Phone Number.'
        ]);
        return redirect()->back();

    }

}
