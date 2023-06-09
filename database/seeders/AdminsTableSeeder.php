<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([

            'name' => 'Grayson Sylte',
            'username' => 'grq2kz28921',
            'password' => 'dsj_2s___!!_!adnasdj1212n'
        ]);

        DB::table('admins')->insert([

            'name' => 'Parker Stafford',
            'username' => 'parker',
            'password' => 'maindjds__!!2dsa2192132192319'
        ]);
    }
}
