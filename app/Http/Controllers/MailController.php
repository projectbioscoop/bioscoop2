<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Confirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function index(){
        return view('mail');
    }
    
    public function ticketPaid(Request $request, $userEmail){
        $email = User::findorfail($userEmail);
        
        Mail::to($request->user())->send(new Confirmation($email));
    }
}
