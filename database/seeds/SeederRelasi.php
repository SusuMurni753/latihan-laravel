<?php

use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;
use Illuminate\Database\Seeder;

class SeederRelasi extends Seeder {

public function run() {

    # Kosongin isi tabel
    DB::table('mahasiswas')->delete();
    DB::table('walis')->delete();
    DB::table('dosens')->delete();
    DB::table('hobis')->delete();
    DB::table('mahasiswa_hobi')->delete();
    
    // DB::table('dosen')->delete();
    $dosen = Dosen::create(array(
        'nama' => 'Abdul Musthafa',
        'nipd'  => '1234567890'));

        $this->command->info('Data dosen telah diisi!');

    // DB::table('dosen')->delete();
    $novay = Mahasiswa::create(array(
        'nama' => 'Noviyanyo Rachmadi',
        'nim' => '1015015072',
        'id_dosen' => $dosen->id     
    ));
    
    $dije = Mahasiswa::create(array(
        'nama' => 'Djaffar',
        'nim'  => '1015015088',
        'id_dosen'  => $dosen->id));

    # Mahasiswa Ketiga bernama Puji Rahayu. Dengan NIM 1015015078.
    $ayu = Mahasiswa::create(array(
        'nama' => 'Puji Rahayu',
        'nim'  => '1015015078',
        'id_dosen'  => $dosen->id
    ));

    # Informasi ketika mahasiswa telah diisi.
    $this->command->info('Mahasiswa telah diisi!');

    # Ciptakan wali si $novay
    Wali::create(array(
        'nama'  => 'Achmad S',
        'id_mahasiswa' => $novay->id,
        
    ));
    # Ciptakan wali si $dije
    Wali::create(array(
        'nama'  => 'Entahlah',
        'id_mahasiswa' => $dije->id,
        
    ));
    # Ciptakan wali si $ayu
    Wali::create(array(
        'nama'  => 'Arianto',
        'id_mahasiswa' => $ayu->id,
        
    ));

    # Informasi ketika semua wali telah diisi.
    $this->command->info('Data mahasiswa dan wali telah diisi!');

    # Membuat Data tabel hobi
    $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
    $baca_buku = Hobi::create(array('hobi' => 'Baca Buku'));

    $novay->hobi()->attach($mandi_hujan->id);
    $novay->hobi()->attach($baca_buku->id);
    $dije->hobi()->attach($mandi_hujan->id);
    $ayu->hobi()->attach($baca_buku->id);
    $this->command->info('Mahasiswa beserta hobi telah diisi!');
}
}