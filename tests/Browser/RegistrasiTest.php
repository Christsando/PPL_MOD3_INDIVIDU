<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group regist
     */
    public function testRegis(): void
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/')
                    ->assertSee('Register')
                    ->ClickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name','uliq')
                    ->type('email','uliq@gmail.com')
                    ->type('password','uliq@12345')
                    ->type('password_confirmation','uliq@12345')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
