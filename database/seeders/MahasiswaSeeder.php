<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert(
        [
            'nama'=> 'George Misael', 
            'nim' => '434231115',
            'no_wa' => '085175140630',
            'created_at' => '2024-05-19 07:00:00'
        ],    
    );
    }
}
