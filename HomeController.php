<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailsNotification;
use Illuminate\Support\Facades\Mail;

// Mail::to('clara@example.com')->send(new EmailsNotification($subject, $name,$email, $phone,$message));


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contact_mail_send(Request $request)
    {
        // dd($request->all());
        mail:: to ('clara@gmail.com')->send(new EmailsNotification($request));
        return redirect('contact');
    }
}
