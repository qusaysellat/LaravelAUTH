<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index(){
        Nexmo::message()->send([
            'to'=>'919362236367',
            'from'=>'sender',
            'text'=>'Test SMS'
        ]);
        echo "sent";
    }
}
