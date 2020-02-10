<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Buku;
        $buku->judul = 'Belajar php';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'gramedia';
        $buku->synopsis = 'ini adalah';
        $buku->status = 1;
        $perahu->save();
        //
    }
}
