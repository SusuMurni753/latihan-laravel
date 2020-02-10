<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu($a = null,$b = null,$harga = null)
    {
    if(isset($a)) {
    $a = 'Anda Memesan ' . $a;
    }
    if(isset($b)) {
    $b = " & ". $b;
    }
    if ( $harga >=25000){
    $harga = "jumbo";
    }
    else if ( $harga <= 25000 && $harga > 15000){
    $harga = "Medium";
    }
    else if ( $harga <= 15000 && $harga >0){
    $harga = "Small";
    }
    else{
    $harga = "Uang Anda Tidak Cukup";
    }
    if(!isset($a)){
            $a = 'Anda Belum Memesan Sesuatu';
        } 

        return view('menu',compact('a','b','harga'));
        
        //
}
}   