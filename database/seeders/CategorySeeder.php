<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [];
        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'kategori_kode' => 'K'.$i,
                'kategori_nama' => 'Kategori '.$i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('m_kategori')->insert($data);
    }
}
