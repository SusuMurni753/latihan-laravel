<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    
        public function index()
        {
            $siswa = Siswa::all();
            return $siswa;
        }
        public function show($id)
        {
            $siswa = Siswa::find($id);
            return $siswa;
        }
       
    
        public function buat_data($siswa,$nis){
        $siswa = new Siswa();
        $siswa->nama = $siswa;
        $siswa->nis = $nis;
        $siswa->kelas = "XI";
        $siswa->jurusan = "RPL";
        $siswa->alamat = "Permakops";
        $siswa->tgl_lahir = "2003-05-07";
        $siswa->save();
        return $siswa;
    }
    public function update($id,$siswa,$nis){
        $siswa = Siswa::find($id);
        $siswa->nama = $siswa;
        $siswa->nis = $nis;
        $siswa->kelas = "XI";
        $siswa->jurusan = "RPL";
        $siswa->alamat = "Permakops";
        $siswa->tgl_lahir = "2003-05-07";
        $siswa->save();
        return $siswa;
    }
    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }
    }
    //

