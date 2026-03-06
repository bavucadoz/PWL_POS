<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $counter = 1;
        for ($i = 1; $i <= 10; $i++) { // Untuk setiap transaksi penjualan
            for ($j = 1; $j <= 3; $j++) { // Beli 3 barang per transaksi
                $data[] = [
                    'detail_id' => $counter++,
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 15), // Random barang 1-15
                    'harga' => 10000, // Contoh harga flat
                    'jumlah' => rand(1, 5),
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
