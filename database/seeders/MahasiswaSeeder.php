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
            'Nim' => "2141720083",
            'Nama' => "Anisa Rahmasari",
            'kelas_id' => "4",
            'Jurusan' => "IT",
            'No_Handphone' => "081216774586",
        ]);
        Mahasiswa::create([
            'Nim' => "2141720084",
            'Nama' => "Alfan Kevin",
            'kelas_id' => "4",
            'Jurusan' => "IT",
            'No_Handphone' => "081216774586",
        ]);
    }
}
