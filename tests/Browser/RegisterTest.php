<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    // public function test_register_1()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login/create')
    //         ->type('name_re', 'Quoc Anh Truong')
    //         ->type('username_re', 'J$hnDoe!!!')
    //         ->type('email_re', 'john.doe@example.com')
    //         ->type('password_re', 'Passw0rd')
    //         ->type('repassword_re', 'Passw0rd')
    //         ->press('#send2')
    //         ->assertSee('Tên đăng nhập không hợp lệ');
    //     });
    // }

    // public function test_register_2()
    // {
    // $this->browse(function (Browser $browser) {
    //     $browser->visit('/login/create')
    //         ->type('name_re', 'Quoc Anh Truong')
    //         ->type('username_re', 'JohnDoe123')
    //         ->type('email_re', 'john.doe@example.com')
    //         ->type('password_re', 'Passw0rd')
    //         ->type('repassword_re', 'Password') // Xác nhận mật khẩu không khớp
    //         ->press('#send2')
    //         ->assertSee('Mật khẩu nhập lại không khớp');
    // });
    // }

    // public function test_register_3()
    // {
    // $this->browse(function (Browser $browser) {
    //     $browser->visit('/login/create')
    //         ->type('name_re', 'Quoc Anh Truong')
    //         ->type('username_re', 'JohnDoe123')
    //         ->type('email_re', 'john.doe@example.com')
    //         ->type('password_re', 'Passw0rd')
    //         ->type('repassword_re', 'Passw0rd')
    //         ->press('#send2')
    //         ->assertSee('Đăng ký thành công.');
    // });
    // }

    public function test_register_BVA_1()
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/login/create')
            ->type('name_re', 'Quoc Anh Truong')
            ->type('username_re', 'JohnD')
            ->type('email_re', 'john.doe@example.com')
            ->type('password_re', 'Passw0rd')
            ->type('repassword_re', 'Passw0rd')
            ->press('#send2')
            ->assertSee('Đăng ký thành công.');
    });
    }

    public function test_register_BVA_2()
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/login/create')
            ->type('name_re', 'Quoc Anh Truong')
            ->type('username_re', 'John')
            ->type('email_re', 'john.doe@example.com')
            ->type('password_re', 'Passw0rd')
            ->type('repassword_re', 'Passw0rd')
            ->press('#send2')
            ->assertSee('Tên đăng nhập phải từ 5-15 kí tự');
    });
    }

    public function test_register_BVA_3()
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/login/create')
            ->type('name_re', 'Quoc Anh Truong')
            ->type('username_re', 'JohnD1')
            ->type('email_re', 'john.doe1@example.com')
            ->type('password_re', 'Passw0rd')
            ->type('repassword_re', 'Passw0rd')
            ->press('#send2')
            ->assertSee('Đăng ký thành công.');
    });
    }

    public function test_register_BVA_4()
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/login/create')
            ->type('name_re', 'Quoc Anh Truong')
            ->type('username_re', 'JohnDoeJohnDoe1')
            ->type('email_re', 'john.doe2@example.com')
            ->type('password_re', 'Passw0rd')
            ->type('repassword_re', 'Passw0rd')
            ->press('#send2')
            ->assertSee('Đăng ký thành công.');
    });
    }

    public function test_register_BVA_5()
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/login/create')
            ->type('name_re', 'Quoc Anh Truong')
            ->type('username_re', 'JohnDoeJohnDo')
            ->type('email_re', 'john.doe3@example.com')
            ->type('password_re', 'Passw0rd')
            ->type('repassword_re', 'Passw0rd')
            ->press('#send2')
            ->assertSee('Đăng ký thành công.');
    });
    }

    public function test_register_BVA_6()
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/login/create')
            ->type('name_re', 'Quoc Anh Truong')
            ->type('username_re', 'JohnDoeJohnDoe12')
            ->type('email_re', 'john.doe4@example.com')
            ->type('password_re', 'Passw0rd')
            ->type('repassword_re', 'Passw0rd')
            ->press('#send2')
            ->assertSee('Tên đăng nhập phải từ 5-15 kí tự');
    });
    }
}
