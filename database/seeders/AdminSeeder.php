<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => '1234'
        ]);
        
        User::create([
            'fname' => 'dummy',
            'lname' => 'name',
            'gender' => 'male',
            'email' => 'user@mail.com',
            'password' => '1234'
        ]);
    }
}
