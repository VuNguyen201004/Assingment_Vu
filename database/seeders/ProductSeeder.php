<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Smartphone',
                'description' => 'A high-end smartphone',
                'image' => 'images/smartphone.jpg', // Đường dẫn đến ảnh sản phẩm
                'price' => 699.99,
                'quantity' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'T-shirt',
                'description' => 'A comfortable cotton t-shirt',
                'image' => 'images/tshirt.jpg', // Đường dẫn đến ảnh sản phẩm
                'price' => 19.99,
                'quantity' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'Novel',
                'description' => 'A captivating mystery novel',
                'image' => 'images/novel.jpg', // Đường dẫn đến ảnh sản phẩm
                'price' => 12.99,
                'quantity' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
