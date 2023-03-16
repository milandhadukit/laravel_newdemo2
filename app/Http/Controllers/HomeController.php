<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\SendEmailJob;

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
       
        //view page  fgfddfgdfg
        return view('home');
    }
    

    public function sendMail()
    {
        $details = [
            'email' => auth()->user()->email,
            
        ];
     
    
        dispatch(new SendEmailJob($details));
      

        dd('done');
    }

}
