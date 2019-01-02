<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historyintern extends Model
{
    protected $table = 'historyinterns';
    protected $fillable = ['no_intern','date','time_in','time_out','note'];

        public function users()
    {
        return $this->belongsToMany('App\Internship');
    }   


}
