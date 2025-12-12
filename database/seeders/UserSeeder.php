<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'gudang',
                'email' => 'gudang@gmail.com',
                'password' => bcrypt('gudang123'),
                'role' => 'gudang',
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@gmail.com',
                'password' => bcrypt('kasir123'),
                'role' => 'kasir',
            ],
        ];

        foreach($user as $val) {
            User::create($val);
        }
    }
}
