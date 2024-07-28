<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name'=>'Shirt',
            'description'=>'Full Sleeve',
            'price'=>'1200',
            'image'=>'shirt.jpg',
            'user_id'=>'1'  //Admin product
        ]);
        Product::create([
            'product_name'=>'Shoes',
            'description'=>'Good quality shoes',
            'price'=>'1200',
            'image'=>'shoes.jpeg',
            'user_id'=>'2'  //Vendor product
        ]);
    }
}
