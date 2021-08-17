<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AttachmentMail;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function email(){
        Mail::to('qs@gmail.com')->send(new AttachmentMail());
        return new AttachmentMail();
    }
}
