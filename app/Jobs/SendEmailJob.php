<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendEmailTest;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $details;
    public function __construct($details)
    {
        //
        $this->details = $details;
        
       
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

    
        $email = new SendEmailTest();
      
        Mail::to($this->details['email'])->send($email);
    }
}
