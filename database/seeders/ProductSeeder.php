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
        //    [
        //     'name' => 'Samsung Galaxy A53',
        //     'price' => '85,999',
        //     'description' => 'A smartphone with v ram and much more features',
        //     'category' => 'sumsung mobile',
        //     'gallery' => 'https://www.whatmobile.com.pk/admin/images/Samsung/SamsungGalaxyA53-b.jpg'
        //    ],
        //    [
        //     'name' => 'Xiaomi Redmi 10C 128GB',
        //     'price' => '32,999',
        //     'description' => 'A smartphone with 4gb ram and much more features',
        //     'category' => 'Xiaomi mobile',
        //     'gallery' => 'https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-10c.jpg'
        //    ],
        //    [
        //     'name' => 'Apple iPhone 13 Pro Max',
        //     'price' => '319,700',
        //     'description' => 'A smartphone with 6GB ram and much more features',
        //     'category' => 'Apple mobile',
        //     'gallery' => 'https://i0.wp.com/buybest.pk/wp-content/uploads/2022/01/ii.jpg?fit=1080%2C810&ssl=1'
        //    ],
        //    [
        //     'name' => 'Apple iPhone 13 Pro',
        //     'price' => '297,999',
        //     'description' => 'A smartphone with 6GB ram and much more features',
        //     'category' => 'Apple mobile',
        //     'gallery' => 'https://stall.pk/wp-content/uploads/2022/02/iphone-13-pro-Pakistan-Stall.pk_.jpg'
        //    ], [
        //     'name' => 'Apple iPhone 13',
        //     'price' => 'Rs. 233,799',
        //     'description' => 'A smartphone with 6GB ram and much more features',
        //     'category' => 'Apple mobile',
        //     'gallery' => 'https://www.pakmobizone.pk/wp-content/uploads/2021/10/Apple-iphone-13-Pink-2.png'
        //    ], [
        //     'name' => 'Apple iPhone 12 Pro Max',
        //     'price' => '235,999',
        //     'description' => 'A smartphone with 6GB ram and much more features',
        //     'category' => 'Apple mobile',
        //     'gallery' => 'https://images.priceoye.pk/apple-iphone-12-pro-max-pakistan-priceoye-jqig7.jpg'
        //    ],
        [
            'name' => 'TCL  TV',
            'price' => '40,989',
            'description' => 'Product details of TCL D3000 40 Full HD LED TV - Black',
            'category' => 'TCL TV',
            'gallery' => 'https://static-01.daraz.pk/p/a73eb4f69ae0ab79c8f56e39fa6c85e1.jpg'
           ],
           [
            'name' => 'TCL  TV',
            'price' => '54,999',
            'description' => 'TCL 40" Full HD Smart Android LED TV 40S6500',
            'category' => 'TCL TV',
            'gallery' => 'https://static-01.daraz.pk/p/mdc/de56c36c0538897113ad99798310bb6b.jpg'
           ],
        ]);
    }
}
