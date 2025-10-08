<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Order; 
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Nonaktifkan pengecekan foreign key
        Schema::disableForeignKeyConstraints();

        // 2. Kosongkan tabel (hapus orders dulu, baru products)
        Order::truncate();
        Product::truncate();

        // 3. Aktifkan kembali pengecekan foreign key
        Schema::enableForeignKeyConstraints();

        $products = [
            [
                'name' => 'Website Basic',
                'description' => 'Paket pembuatan website sederhana',
                'price' => 500000.00,
                'stock' => 10,
                'type' => 'service',
                'image_url' => 'https://i.pinimg.com/736x/fa/e1/ce/fae1ce648eaef1ed552a3f0978901e4c.jpg'
            ],
            [
                'name' => 'Aplikasi Mobile',
                'description' => 'Jasa pembuatan aplikasi mobile cross-platform',
                'price' => 2000000.00,
                'stock' => 5,
                'type' => 'service',
                'image_url' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=500&h=300&fit=crop'
            ],
            [
                'name' => 'Game Development',
                'description' => 'Jasa pembuatan game 2D dan 3D',
                'price' => 3000000.00,
                'stock' => 3,
                'type' => 'service',
                'image_url' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e?w=500&h=300&fit=crop'
            ],
            [
                'name' => 'Les Coding Privat',
                'description' => 'Belajar coding privat dengan mentor berpengalaman',
                'price' => 100000.00,
                'stock' => 20,
                'type' => 'course',
                'image_url' => null
            ],
            [
                'name' => 'Kursus Bikin Game',
                'description' => 'Kursus khusus membuat game dengan Unity',
                'price' => 250000.00,
                'stock' => 30,
                'type' => 'course',
                'image_url' => null
            ],
            [
                'name' => 'Les Office',
                'description' => 'Pelatihan Microsoft Office untuk perkantoran',
                'price' => 75000.00,
                'stock' => 100,
                'type' => 'course',
                'image_url' => null
            ],
            [
                'name' => 'Game Construct 3',
                'description' => 'Menyediakan layanan order game berbasis Construct 3',
                'price' => 10000.00,
                'stock' => 31,
                'type' => 'service',
                'image_url' => 'https://images.unsplash.com/photo-1552820728-8b83bb6b773f?w=500&h=300&fit=crop'
            ]
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'type' => $product['type'],
                'image_url' => $product['image_url'],
            ]);
        }
    }
}