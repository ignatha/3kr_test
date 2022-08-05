<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_id'   => 'admin',
            'password'  => Hash::make('admin'),
            'email'     => 'admin@gmail.com',
            'phone'     => '081515311900',
            'pin'       => '123456',
            'is_admin'  => 1
        ]);
    }
}
