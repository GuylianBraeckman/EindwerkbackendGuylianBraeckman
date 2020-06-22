<?php

use App\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentPlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PaymentPlatform::create([
            'name'=>'Paypal',
            'image'=>'images/paypal.jpg'
        ]);
    }
}
