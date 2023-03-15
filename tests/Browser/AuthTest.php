<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function ($browser) {
            //We'll test the register feature here
            $browser->visit('/')
                    ->clickLink('Register')
                    ->value('#name', 'milan') 
                    ->value('#email', 'milan@gmail.com')
                    ->value('#password', '12345678')
                    ->value('#password_confirmation', '12345678')
                    ->click('button[type="submit"]') 

            //We'll test the login feature here
                    ->press('milan');
                    if ($browser->seeLink('Log Out')) {
                        $browser->clickLink('Log Out')

                        ->clickLink('Login')
                        ->value('#email', 'milan@gmail.com')
                        ->value('#password', '12345678')
                        ->click('button[type="submit"]');
                    }

        });
    }
}
