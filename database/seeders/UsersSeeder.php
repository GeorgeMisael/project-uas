<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' =>'Bima Sakti',
                'username'=>'bimaa',
                'password' =>'1234567899',
                'email' => 'bima@gmail.com',
                'no_hp' => '',
                'id_jenis_user'=>'',
                'created_at' => '2024-05-19 07:00:00'
            ],    
        );
    }
}
