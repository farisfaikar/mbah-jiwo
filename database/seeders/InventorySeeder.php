<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::create([
            'id' => 1,
            'nama_barang' =>  'Nike Court Low Vision',
            'harga_beli' => 500000,
            'harga_jual' => 800000,
            'kategori' => 'Sepatu',
            'jumlah_stok' => 10,
            'jumlah_terjual' => 15
        ]);

        Inventory::create([
            'id' => 2,
            'nama_barang' =>  'Acer Aspire 5',
            'harga_beli' => 1000000,
            'harga_jual' => 1200000,
            'kategori' => 'Elektronik',
            'jumlah_stok' => 5,
            'jumlah_terjual' => 11
        ]);

        Inventory::create([
            'id' => 3,
            'nama_barang' =>  'Redmi 9T',
            'harga_beli' => 2000000,
            'harga_jual' => 2500000,
            'kategori' => 'Elektronik',
            'jumlah_stok' => 11,
            'jumlah_terjual' => 21
        ]);

        Inventory::create([
            'id' => 4,
            'nama_barang' =>  'H&M White Shirt',
            'harga_beli' => 50000,
            'harga_jual' => 100000,
            'kategori' => 'Baju',
            'jumlah_stok' => 12,
            'jumlah_terjual' => 42
        ]);

        Inventory::create([
            'id' => 5,
            'nama_barang' =>  'Kriss Vector Airsoft',
            'harga_beli' => 2500000,
            'harga_jual' => 3000000,
            'kategori' => 'Mainan',
            'jumlah_stok' => 5,
            'jumlah_terjual' => 6
        ]);
    }
}
