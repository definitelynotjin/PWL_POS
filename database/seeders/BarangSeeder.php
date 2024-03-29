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
       // Ambil semua kategori yang telah ada
       $kategoriIds = DB::table('m_kategori')->pluck('kategori_id')->toArray();

       $data = [];
       for ($i = 1; $i <= 100; $i++) {
           $data[] = [
               'kategori_id' => $kategoriIds[array_rand($kategoriIds)],
               'barang_kode' => 'B'.$i,
               'barang_nama' => 'Barang '.$i,
               'harga_beli' => rand(1000, 10000),
               'harga_jual' => rand(11000, 20000),
               'created_at' => now(),
               'updated_at' => now(),
           ];
       }

       DB::table('m_barang')->insert($data);
    }
}
