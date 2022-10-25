<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'status' => 'active'
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'agung',
            'email' => 'agung@gmail.com',
            'password' => Hash::make('agung'),
            'status' => 'suspend'
        ]);
    }
}
