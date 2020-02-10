<?php

namespace App;
use App\Wali;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    
        # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
        protected $fillable = array('nama', 'id_mahasiswa');
        public $timestamps = true;
    
        public function mahasiswa() {
            return $this->belongsTo('App\Mahasiswa', 'id_mahasiswa');
        }
    
    }

