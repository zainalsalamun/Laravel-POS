<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Zainal Salamun',
            'email' => 'zainalrtf@gmail.com',
            'password' => Hash::make('admin'),
            'roles' => 'admin',
            'phone' => '081573550017'
        ]);
    }
}
