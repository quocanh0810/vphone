<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class OrderProcessingTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_admin_dashboard()
{
    $this->browse(function (Browser $browser) {
        // Đăng nhập vào trang web với tài khoản admin
        $browser->visit('/login')
            ->type('email_login', 'quocanh810')
            ->type('password_login', 'quocanh12')
            ->press('#send2')
            ->assertPathIs('/dashboard'); // Kiểm tra xem đã chuyển hướng đến trang dashboard chưa

        // Tiến hành chuyển hướng đến trang /order từ trang dashboard
        $browser->visit('/order');
        // Tiến hành kiểm tra các nút trên trang /order

        // Kiểm tra nút có trạng thái disabled khi status là COMPLETELY PAYMENT
    // $browser->assertVisible('button[data-order="238337867"][data-id="14"]');
    $browser->assertAttribute('button[data-order="238337867"][data-id="14"]', 'disabled', 'disabled');
    
    // Kiểm tra nút <button type="button" data-order="1713437437" data-id="2" class="btn btn-outline btn-primary detailorder" fdprocessedid="iefkra"><i class="fa fa-info-circle"></i></button> không bị disabled xem có nhấn được không?
    $browser->script("return !document.querySelector('button[data-order=\"238337867\"][data-id=\"14\"]').hasAttribute('disabled');", function ($result) {
        $this->assertTrue($result);
    });

    // Kiểm tra nút <button type="button" data-order="1085497947" data-id="1" class="btn btn-outline btn-primary detailorder" fdprocessedid="0s015d"><i class="fa fa-info-circle"></i></button> không bị disabled xem có nhấn được không?
    $browser->script("return !document.querySelector('button[data-order=\"1085497947\"][data-id=\"1\"]').hasAttribute('disabled');", function ($result) {
        $this->assertTrue($result);
    });

    });
}
}
