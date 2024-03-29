<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $penjualanIds = DB::table('t_penjualan')->pluck('penjualan_id')->toArray();
        $barangIds = DB::table('m_barang')->pluck('barang_id')->toArray();

        foreach ($penjualanIds as $penjualanId) {
            for ($i = 0; $i < 3; $i++) {
                $data[] = [
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangIds[array_rand($barangIds)],
                    'harga' => rand(1000, 20000),
                    'jumlah' => rand(1, 10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
