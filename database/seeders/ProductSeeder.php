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
                'name'=>'Xiaomi Mi 11 Pro',
                'price'=>'40000',
                'category'=>'Mobile',
                'gallery'=>'https://static.hub.91mobiles.com/wp-content/uploads/2021/01/Mi-11-Pro-alleged-render.jpg',
                'description'=>'Zoom upto 120x',
            ],
            [
                'name'=>'LG Velvet',
                'price'=>'30000',
                'category'=>'Mobile',
                'gallery'=>'https://www.lg.com/in/images/plp-b2c/New-2020-Mobiel-banner/Velvet-category-M-category-V3.jpg',
                'description'=>'Dual Screen',
            ],
            [
                'name'=>'Oppo F17',
                'price'=>'28000',
                'category'=>'Mobile',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/oppo-f17-pro-574x800-1599056571.jpg',
                'description'=>'4 Cameras',
            ],
            [
                'name'=>'Techno Spark 6',
                'price'=>'25000',
                'category'=>'Mobile',
                'gallery'=>'https://www.mobilepoint.com.bd/wp-content/uploads/2020/10/tecno-spark-6-mobile-price-in-bd-1.png',
                'description'=>'128gb ROM',
            ]
        ]);
    }
}
