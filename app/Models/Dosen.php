<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    //protected $primaryKey = 'id';

    protected $fillable = ['nip', 'nama', 'email', 'alamat'];
    //  use HasFactory;
    public function matkul()
    {

        return $this->hasMany('App\Models\Matkul');
    }
}
