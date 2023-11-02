<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aksi;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\GuruBK;
use App\Models\ListPelanggaran;
use App\Models\Siswa;
use Database\Factories\SiswaFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        JurusanSeeder::class,
        KelasSeeder::class,
        GuruBKSeeder::class,
        PelanggaranSeeder::class,
       ]);
       
       Siswa::factory(100)->create();
       Aksi::factory(30)->create();
       ListPelanggaran::factory(95)->create();

}
}