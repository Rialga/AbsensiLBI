<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $table = 'internships';
    protected $fillable = ['no_intern','name'];

    public function absensi()
    {
        return $this->hasMany('App\Historyintern');
    }   
}
