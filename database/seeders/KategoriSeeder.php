<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'SNC', 'kategori_nama' => 'Snack'],
            ['kategori_id' => 2, 'kategori_kode' => 'MNM', 'kategori_nama' => 'Minuman'],
            ['kategori_id' => 3, 'kategori_kode' => 'KSR', 'kategori_nama' => 'Kesehatan'],
            ['kategori_id' => 4, 'kategori_kode' => 'PRD', 'kategori_nama' => 'Perawatan Diri'],
            ['kategori_id' => 5, 'kategori_kode' => 'RUM', 'kategori_nama' => 'Rumah Tangga'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
