<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editNote
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertsee('Log in')
                    ->ClickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email','udin@gmail.com')
                    ->type('password','udin@12345')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->assertsee('Notes')
                    ->ClickLink('Notes')
                    ->assertPathIs('/notes')
                    ->ClickLink('Edit')
                    ->assertPathIs('/edit-note-page/2')
                    ->type('title','testcase1')
                    ->type('description','testcase1')
                    ->press('UPDATE')
                    ->assertPathIs('/notes');
        });
    }
}
