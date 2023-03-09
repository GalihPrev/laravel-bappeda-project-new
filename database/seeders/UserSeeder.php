<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUser = [
            ['username' => 'Bappeda'],
            ['password' => 'password'],
            ['role_id' => 1],
            ['kelurahan_id' => 1],
            

        ];

        User::create([
            'username' => 'Bappeda',
            'password' => Hash::make('password'),
            'role_id' => 2,
            'kelurahan_id' => 1,
        ]);

        foreach ($dataUser as $data) {
            DB::table('users')->insert([
                'username' => $data['username'],
                'password' => 'password',
                'role_id' => $data['role_id'],
                'kelurahan_id' => $data['kelurahan_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
