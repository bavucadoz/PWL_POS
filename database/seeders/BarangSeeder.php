<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1, 
                'barang_kode' => 'B01',
                'barang_nama' => 'Chiki Taro',
                'harga_beli' => 4500,
                'harga_jual' => 5500,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'B02',
                'barang_nama' => 'Oreo',
                'harga_beli' => 7000,
                'harga_jual' => 8500,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'B03',
                'barang_nama' => 'Teh Botol Sosro',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 3,
                'barang_kode' => 'B04',
                'barang_nama' => 'Paracetamol',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 4,
                'barang_kode' => 'B05',
                'barang_nama' => 'Shampoo Dove',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 5,
                'barang_kode' => 'B06',
                'barang_nama' => 'Detergen ABC',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 1,
                'barang_kode' => 'B07',
                'barang_nama' => 'Chitato',
                'harga_beli' => 5000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'B08',
                'barang_nama' => 'Aqua',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'B09',
                'barang_nama' => 'Vitamin C',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'B10',
                'barang_nama' => 'Sikat Gigi Pepsodent',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 5,
                'barang_kode' => 'B11',
                'barang_nama' => 'Pembersih Lantai Wipol',
                'harga_beli' => 10000,
                'harga_jual' => 13000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 1,
                'barang_kode' => 'B12',
                'barang_nama' => 'Kit Kat',
                'harga_beli' => 6000,
                'harga_jual' => 7500,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 2,
                'barang_kode' => 'B13',
                'barang_nama' => 'Coca Cola',
                'harga_beli' => 4000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 3,
                'barang_kode' => 'B14',
                'barang_nama' => 'Obat Flu',
                'harga_beli' => 7000,
                'harga_jual' => 9000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 4,
                'barang_kode' => 'B15',
                'barang_nama' => 'Body Wash Nivea',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
