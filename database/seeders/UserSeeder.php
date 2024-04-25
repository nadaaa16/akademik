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
        // for ($i = 0; $i < 10; $i++) {
        //     $username = 'user' . $i;
        //     // Mengecek apakah nama pengguna sudah ada, jika ya, tambahkan nomor iterasi lebih lanjut
        //     while (DB::table('users')->where('nama', $username)->exists()) {
        //         $i++;
        //         $username = 'user' . $i;
        //     }
    
        //     DB::table('users')->insert([
        //         'nama' => $username,
        //         'password' => Hash::make('password123'),
        //     ]);
            $userData = [
                // [
                //     'name' => 'Admin',
                //     'email' => 'admin3@gmail.com',
                //     'role' => 'admin',
                //     'password' => bcrypt('12108602')
                // ],
                // [
                //     'name' => 'Kasir',
                //     'email' => 'kasir2@gmail.com',
                //     'role' => 'petugas',
                //     'password' => bcrypt('1234')
                // ],
                [
                    'name' => 'abay',
                    'role' => 'admin',
                    'password' => bcrypt('12346')
                    
                ],
            ];
        }
    }
    


