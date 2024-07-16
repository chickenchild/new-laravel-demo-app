<?php declare(strict_types=1);

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use App\Models\User;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
//    use DatabaseMigrations;

    /**
     * A basic browser test example.
     */
    public function test_basic_example(): void
    {
//        $user = User::factory()->create([
//            'email' => 'thanhtranit91@gmail.com',
//        ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->waitForText('Email')
                ->type('input#email', 'thanhtranit91@gmail.com')
                ->type('input#password', 'toilatoi')
                ->press('LOG IN')
                ->waitForLocation('/dashboard')
                ->assertPathIs('/dashboard');
        });
    }
}
