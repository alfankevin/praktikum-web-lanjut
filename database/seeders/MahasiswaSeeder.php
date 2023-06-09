<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'Nim' => "2141720084",
            'Nama' => "Anisa Rahmasari",
            'Kelas' => "2D",
            'Jurusan' => "IT",
            'No_Handphone' => "081216774586",
        ]);
    }
}
