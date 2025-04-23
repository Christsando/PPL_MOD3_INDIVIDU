<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertsee('Log in')
                    ->ClickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email','udin@gmail.com')
                    ->type('password','udin@12345')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard');
        });
    }
}
