<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchases')->insert([
            [
                'user_id' => 1,
                'product_id' => 5,
                'purchase_price' => 45000,
                'shipping_address' => '222-2222送付先の変更',
            ],
            [
                'user_id' => 1,
                'product_id' => 7,
                'purchase_price' => 3500,
                'shipping_address' => '333-2222送付先の変更',
            ],
            [
                'user_id' => 1,
                'product_id' => 10,
                'purchase_price' => 2500,
                'shipping_address' => '444-2222送付先の変更',
            ],
        ]);
    }
}
