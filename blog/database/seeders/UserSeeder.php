<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'full_name' => 'gian garcia',
            'email' => 'test@test',
            'password' => Hash::make('1234'),
        ]);

        User::create([
            'full_name' => 'tonio garcia',
            'email' => 'tonio@test',
            'password' => Hash::make('1234'),
        ]);

        User::factory(10)->create();
    }
}
