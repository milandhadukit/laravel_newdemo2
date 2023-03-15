<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OffersNotification;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        return view('product');
    }


    public function sendOfferNotification() {
        $userSchema = User::find(2);
  
        $offerData = [
            'name' => 'pradip',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];

       


       


        // $userSchema->notify(new OffersNotification($offerData));
        // Notification::send($userSchema, new OffersNotification($offerData));
        Notification::sendNow($userSchema, new OffersNotification($offerData));
    
        dd('Task completed!');
    }
}
