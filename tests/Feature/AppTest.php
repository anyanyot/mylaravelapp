<?php

namespace Tests\Feature;
//use Laravel\Dusk\DuskServiceProvider;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\BrowserKitTesting\Concerns\InteractsWithPages;

class AppTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->assertTrue(true);
        $this->visit('/login')
	  ->login("zkop78@gmail.com")
	  ->press('Login')
	  ->seePageIs('/home');
    }
    
}
