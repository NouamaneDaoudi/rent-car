<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            // 'name	email	email_verified_at	number	city	password'
            'name'=>'nouamane',
            'email'=>'nouamane@gmail.com',
            'number'=>'123456789',
            'city'=>'agadir',
            'password'=>Hash::make('123'),
        ]);
    }
}
