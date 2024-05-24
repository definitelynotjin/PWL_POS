<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'level_id' => 1,
                'username' => 'adminaja',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'username' => 'manager',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 3,
                'level_id' => 2,
                'username' => 'staff',
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 4,
                'level_id' => 3,
                'username' => 'adminn',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],

            [
                'user_id' => 6,
                'level_id' => 2,
                'username' => 'stafff',
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 7,
                'level_id' => 3,
                'username' => 'www ',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 8,
                'level_id' => 2,
                'username' => 'managerawr',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 9,
                'level_id' => 2,
                'username' => 'staffff',
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 10,
                'level_id' => 3,
                'username' => 'adminnnn',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 11,
                'level_id' => 2,
                'username' => 'managerrrr',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 12,
                'level_id' => 1,
                'username' => 'staffffff',
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('12345'),
            ],

        ];
        DB::table('m_user')->insert($data);
    }
}
