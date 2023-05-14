<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $users = [
            [
                'username' => 'admin1',
                'password' => bcrypt('121212'),
                'nama' => 'admin',
                'role' => 'admin'
            ],
            [
                'username' => 'kasir1',
                'password' => bcrypt('121212'),
                'nama' => 'kasir',
                'role' => 'kasir'
            ],
            [
                'username' => 'owner1',
                'password' => bcrypt('121212'),
                'nama' => 'owner',
                'role' => 'owner'
            ]
        ];
        
        foreach ($users as $user) {
            # code...
            User::create($user);
        }

        $products = [
            [
                'nama_produk' => 'suite room',
                'harga_produk' => 1500000,
                'image_kamar' => 'room-1.jpg',
                'ukuran_kasur' => '200 x 200',
                'ukuran_kamar' => '45 m2',
                'maks' => '4 orang',
                'tersedia' => 6
            ],
            [
                'nama_produk' => 'standard room',
                'harga_produk' => 1000000,
                'image_kamar' => 'room-4.jpg',
                'ukuran_kasur' => '200 x 200',
                'ukuran_kamar' => '45 m2',
                'maks' => '4 orang',
                'tersedia' => 6
            ],
            [
                'nama_produk' => 'family room',
                'harga_produk' => 2000000,
                'image_kamar' => 'room-3.jpg',
                'ukuran_kasur' => '200 x 200',
                'ukuran_kamar' => '45 m2',
                'maks' => '4 orang',
                'tersedia' => 6
            ],
            [
                'nama_produk' => 'deluxe room',
                'harga_produk' => 4000000,
                'image_kamar' => 'room-6.jpg',
                'ukuran_kasur' => '200 x 200',
                'ukuran_kamar' => '45 m2',
                'maks' => '4 orang',
                'tersedia' => 6
            ],
        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
