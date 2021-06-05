<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    //protected $primaryKey = 'kode_matkul';
    protected $fillable = ['kode_matkul', 'nama', 'semester'];

    public function dosen()
    {

        return $this->belongsTo('App\Models\Dosen');
    }
}
