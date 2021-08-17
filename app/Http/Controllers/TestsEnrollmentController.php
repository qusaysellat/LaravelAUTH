<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Notification;

class TestsEnrollmentController extends Controller
{
    public function sendTestNotificationl(){
        
        $user=User::first();
        
        $enrollmentData=[
            'body'=>'You Received a New Notification',
            'enrollmentText'=>'You are allowed to enroll',
            'url'=>url('/'),
            'thankyou'=>'Thank you very much'
        ];

        // $user->notify(new TestEnrollment($enrollmentData));
        Notification::send($user, new TestEnrollment($enrollmentData));
    }
}
