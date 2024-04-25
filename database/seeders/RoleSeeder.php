<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\support\Facades\Schema;


use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data=[
            'admin', 'siswa', 'guru',
        ];

        foreach ($data as $value){
            Role::insert([
                'nama' => $value
            ]);
    }
}
}