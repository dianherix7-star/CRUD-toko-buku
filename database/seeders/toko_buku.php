<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class toko_buku extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('toko_buku')->insert(
            [
            'judul_buku' => 'Naruto',
            'pengarang' => 'Masashi Kishimoto',
            'penerbit' => 'Shueisha',
            'genre' => 'Action, Adventure, Fantasy',
            'tahun_terbit' => 1999,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
