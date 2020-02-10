<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodata()
    {
        $a = 'Andre';
        $b = '166';
        $c = 'islam';
        $d = 'laki-laki';
        $e = 'bandung';
        $f = 'assalaam';
        $g = 'XI';
        $h = 'RPL';
        $i = 'main';

        
        return view('test3',['nama' => $a,'umur' => $b,'agama' => $c,'jeniskelamin' => $d,'alamat' => $e,'sekolah' => $f,'kelas' => $g,'jurusan' => $h,'hobi' => $i]);
    }
    //
}
