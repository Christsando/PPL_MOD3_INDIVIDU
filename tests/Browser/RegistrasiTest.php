<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegis(): void
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/')
                    ->assertSee('Register')
                    ->ClickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name','udin')
                    ->type('email','udin@gmail.com')
                    ->type('password','udin@12345')
                    ->type('password_confirmation','udin@12345')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
