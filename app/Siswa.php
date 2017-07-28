<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    
      protected $table='Siswa';
      protected $fillable = ['nama','alamat','tgl'];
      protected $visible = ['nama','alamat','tgl'];
      public $timestamps = true;
      

}
