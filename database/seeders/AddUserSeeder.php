<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Grayson Sylte',
            'username' => 'gray',
            'email' => 'graypacks@gmail.com',
            'password' => 'admin'
        ]);

        DB::table('users')->insert([

            'name' => 'Parker Stafford',
            'username' => 'parker',
            'email' => 'parkerstafforddev@gmail.com',
            'password' => 'admin'
        ]);
    }
}

