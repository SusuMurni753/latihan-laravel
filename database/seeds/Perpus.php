<?php

use App\Perpustakaan;
use Illuminate\Database\Seeder;

class Perpus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Perpustakaan;
        $buku->judul_buku = 'Belajar2 php';
        $buku->jumlah_halaman = 100;
        $buku->nama_peminjam = 'indonesia';
        $buku->save();

        //
    }
}
