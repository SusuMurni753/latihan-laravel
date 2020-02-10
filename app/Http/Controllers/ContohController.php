<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan()
    {
        return 'ini contoh Latihan Controller';
    }
    public function latihan2()
    {
        $a = 'Andre';
        $b = 'alexander';

        return 'Nama Saya Adalah '.$a. ' '.$b;
    }

    public function latihan3()
    {
        $a = 'alexander';
        return view('test',compact ('a'));
    }

    public function latihan4()
    {
        $a = "Dadang Jubed";
        return view('test2',['nama' => $a]);
    }
}