<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

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
         DB::table('users')->insert(
            [
            'nama'=>'abay',
            'password'=>Hash::make('1212'),
            ],
            ['nama'=>'yaba',
            'password'=>Hash::make('111'),
             ], 
             [
             'nama'=>'abay',
             'password'=>Hash::make('1212'),
            ],
        );
    }
}
