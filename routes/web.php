<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\PerahuSeeder;
use App\Perpus;
use App\Gaji;

Route::get('/sa', function (){
    return perpus::all();
});

Route::get('/aa', function () {
    return view('welcome');
});

Route::get('/vv', function() {
    return ('Hello');
});

Route::get('/bb', function(){
    return ('Nama Saya Ujang');
});

Route::get('/ccc', function(){
    return ('kelas XI');
});

Route::get('/asdsa', function(){
    return ('aceh');
});

Route::get('variabel', function(){
    $data1 = 'ini variabel 1';
    $data2 = 'ini variabel 2';
    $data3 = 'ini variabel 3';
    $data4 = 'ini variabel 4';
    $data5 = 'ini variabel 2';
    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});

Route::get('angkot/{jurusan}/{jurusan1}',function (){
    $jurusan = 'cibaduyut-karang setra';
    $jurusan1 = 'cibaduyut-aceh';
    $data ='angkot jurusan';
    return $data.' '.$jurusan.'<br>'.$data.' '.$jurusan1;
});

Route::get('user/{nama}/{alamat}/{nomer}',function ($nama,$alamat,$nomer){
     return 'halo'. $nama. 'yang beralamat'.$alamat.'nomer'.$nomer;
 });

Route::get('user/{nama}/{nilai}',function ($nama,$nilai='Tidak Ada'){
    if ( $nilai >= 50){
        $nilai = 'Grade =A';
    }
    else if ( $nilai < 50 && $nilai >= 40){
        $grade = 'Grade =B';
    }
    else if ( $nilai < 40 && $nilai >= 30){
        $nilai = 'Grade =C';
    }
    else if ( $nilai < 30 && $nilai >= 20){
        $nilai = 'Grade =D';
    }
    else if ( $nilai < 20 && $nilai >= 10){
        $nilai = 'Grade =E';
    }
    else{
        $nilai = "tidak mendapatkan nilai";
    }
     return 'Halo '. $nama.' Nilai Anda '.$nilai;
     
    });

    Route::get('contoh','ContohController@latihan');
    Route::get('profil','ContohController@latihan2');
    Route::get('profil2','ContohController@latihan3');
    Route::get('profil3','ContohController@latihan4');
    Route::get('profil4','BiodataController@biodata');
    Route::get('menu/{menu1?}/{menu2?}/{harga?}','MenuController@menu');
                        //Buku
    Route::get('get-Buku/','BukuController@index');
    Route::get('create-Buku/','BukuController@buat_data');
    Route::get('get-buku/{id}','BukuController@show');
    Route::get('delete-Buku/','BukuController@delete');
    Route::get('update-Buku/','BukuController@update');
    Route::get('hitung-Buku/','BukuController@hitungbuku');
                        //Siswa
    Route::get('get-Siswa','SiswaController@index');
    Route::get('create-Siswa/{nama}/{nis}','SiswaController@buat_data');
    Route::get('show-Siswa/{id}','SiswaController@show');
    Route::get('delete-Siswa/{id}','SiswaController@delete');
    Route::get('update-Siswa/{nama}/{nis}','SiswaController@update');

    // passing Data
    Route::get('pass','PracticeController@pass');
    Route::get('passing','PracticeController@pass1');
    Route::get('status/{a?}','PracticeController@status');
    Route::get('buku','PracticeController@loop');

    //book
    Route::get('book','BukuController@index');
    Route::get('book/{id}','BukuController@show');

    Route::get('gaji','GajiController@index');
    Route::get('gaji/{id}','GajiController@show');
    //belajar blade templating
    Route::get('/profil',function()
    {
        return view('profil');
    });

    Route::get('/kontak',function()
    {
        return view('kontak');
    });

    Route::get('/blog',function()
    {
        return view('blog');
    });

    use App\Mahasiswa;
    use App\Dosen;
    use App\Hobi;
    use App\Wali;

    Route::get('relasi-1', function() {
        $mahasiswa = Mahasiswa::where('nim','=','1015015072')->first();
        return $mahasiswa->wali->nama;
    });

    Route::get('relasi-2', function() {
        $mahasiswa = Mahasiswa::where('nim','=','1015015072')->first();
        return $mahasiswa->dosen->nama;
    });


    Route::get('relasi-3', function(){
        $dosen = Dosen::where('nama', '=', 'Abdul Musthafa')->first();
        foreach ($dosen->mahasiswa as $temp)
            echo '<li> Nama : ' . $temp->nama . 
            '<strong>' . $temp->nim . '</strong></li>';
    });

    Route::get('relasi-4', function(){
        $novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();
        foreach ($novay->hobi as $temp)
            echo '<li> Nama : ' . $temp->nama .'</li>';
    });

    Route::get('relasi-5', function(){
        $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();
        foreach ($mandi_hujan->mahasiswa as $temp)
            echo '<li> Nama : ' . $temp->nama .
            '<strong>' . $temp->nim . '</strong></li>';
        
    });

    Route::get('eloquent', function(){
        $data = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
        return view('eloquent', compact('data'));
    });



 