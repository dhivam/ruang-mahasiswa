<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function login($no, $password)
    {
      $query = DB::select("SELECT * FROM mahasiswa WHERE nim = '$nim' AND password = '$password'");
  
      if ($query == null) {
        return false;
      }
      return $query;
    }

    protected $table = 'mahasiswa';
}
