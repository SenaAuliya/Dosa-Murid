<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kelas::create([
            "kode_kelas" => "RPL2023",
            "nama_kelas" => "X RPL1",
            "kode_jurusan" => "RPL",
        ]);
        kelas::create([
            "kode_kelas" => "RPL2022",
            "nama_kelas" => "XI RPL1",
            "kode_jurusan" => "RPL",
        ]);
        kelas::create([
            "kode_kelas" => "RPL2021",
            "nama_kelas" => "XII OTKP2",
            "kode_jurusan" => "OTKP",
        ]);
    }
}
