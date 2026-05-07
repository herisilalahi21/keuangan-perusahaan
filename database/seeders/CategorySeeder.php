<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Category::insert([
        ['name' => 'Penjualan Produk', 'type' => 'income'],
        ['name' => 'Investasi Masuk', 'type' => 'income'],
        ['name' => 'Gaji Karyawan', 'type' => 'expense'],
        ['name' => 'Sewa Kantor', 'type' => 'expense'],
        ['name' => 'Biaya Listrik & Air', 'type' => 'expense'],
    ]);
}
}
