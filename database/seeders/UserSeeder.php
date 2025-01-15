<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name' => 'admin',
                    'middlename' => null,
                    'lastname' => null,
                    'login' => 'adminka',
                    'password' => 'password',
                    'tel' => '+70000000000',
                    'email' => 'admin@gmail.com',
                    'role'=>'admin'
                ],
            ]
        );

    }
}
