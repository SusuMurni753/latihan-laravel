<?php
use app\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = new Gaji();
        $gaji->nip = "123";
        $gaji->nama = "andre";
        $gaji->agama = "islam";
        $gaji->jenis_kelamin = "laki_laki";
        $gaji->alamat = "kopo";
        $gaji->jabatan = "boss";
        $gaji->jam_kerja = "150";
        $gaji->save();

            $gaji = new Gaji();
            $gaji->nama = "usep";
            $gaji->agama = "islam";
            $gaji->jenis_kelamin = "laki_laki";
            $gaji->alamat = "kopo";
            $gaji->jabatan = "karyawan";
            $gaji->jam_kerja = "200";
            $gaji-> save();

        $gaji = new Gaji();
        $gaji->nip = "789";
        $gaji->nama = "ujang";
        $gaji->agama = "islam";
        $gaji->jenis_kelamin = "laki_laki";
        $gaji->alamat = "kopo";
        $gaji->jabatan = "sekretaris";
        $gaji->jam_kerja = "250";
        $gaji-> save();


    }
}
