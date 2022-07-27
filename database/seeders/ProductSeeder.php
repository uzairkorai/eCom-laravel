<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           [
            'name' => 'Oppo F21 Pro 5G',
            'price' => '79,999',
            'description' => 'A smartphone with, 8GB ram and much more features',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/xMhwgi2FbCrXAKR6A'
           ],
           [
            'name' => 'Samsung Galaxy A53',
            'price' => '85,999',
            'description' => 'A smartphone with v ram and much more features',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/ewgk4iSxVauSvpyw9'
           ],
           [
            'name' => 'Xiaomi Redmi 10C 128GB',
            'price' => '32,999',
            'description' => 'A smartphone with 4gb ram and much more features',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/EmrKxXNSY6iRQ12s7'
           ],
           [
            'name' => 'Apple iPhone 13 Pro Max',
            'price' => '319,700',
            'description' => 'A smartphone with 6GB ram and much more features',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/V5QecckNuS8DKGN19'
           ],
           [
            'name' => 'Apple iPhone 13 Pro',
            'price' => '297,999',
            'description' => 'A smartphone with 6GB ram and much more features',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/Mb2YGgCWikCgNg188'
           ], [
            'name' => 'Apple iPhone 13',
            'price' => 'Rs. 233,799',
            'description' => 'A smartphone with 6GB ram and much more features',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/bKJTj3uxv2BwkMSR6'
           ], [
            'name' => 'Apple iPhone 12 Pro Max',
            'price' => '235,999',
            'description' => 'A smartphone with 6GB ram and much more features',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/mmKpJLskBDKzWj4H9'
           ], [
            'name' => 'Apple iPhone 12 Pro',
            'price' => '220,899',
            'description' => 'A smartphone with 6GB ram and much more features',
            'category' => 'mobile',
            'gallery' => 'https://images.app.goo.gl/MQuKw8JnyLG7M8dJA'
           ],
        ]);
    }
}
