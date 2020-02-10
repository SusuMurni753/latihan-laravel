<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $nama = "Ucup Abdul Mustofa";
        return view('latihan',compact('nama'));
    }
    public function pass1()
    {
        $gaji = 2000000;
        return view('latihan',['penghasilan'=>$gaji]);
    }
    //pass data parameter
    public function status($status = 'jomblo') 
    {
        return view('latihan2',compact('status'));
    }
    public function loop()
    {
        $buku = [
            ['judul'=>'Bangkit Dari Remedial','penerbit'=>'Erlangga',
            'harga'=>100000,'penulis'=>'Aku Yang suka Remedial'
            ],
            ['judul'=>'Tips Move on ','penerbit'=>'Erlangga',
            'harga'=>150000,'penulis'=>'kimi'
            ],
            ['judul'=>'Kekuatan 1/3 Malam','penerbit'=>'Erlangga',
            'harga'=>250000,'penulis'=>'Erika'
            ]
        ];
        return view('latihan3',compact('buku'));
    }
}
