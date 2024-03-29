<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $users = App\User::pluck('id')->toArray(); // Ganti App\User dengan model user yang sesuai

        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'user_id' => $users[array_rand($users)],
                'pembeli' => 'Pembeli '.$i,
                'penjualan_kode' => 'PJ'.$i,
                'penjualan_tinggal' => now()->subDays(rand(1, 365)), // Penjualan dari 1 hari hingga 1 tahun yang lalu
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
