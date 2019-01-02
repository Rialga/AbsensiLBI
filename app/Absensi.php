<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    //
    protected $table = 'absensi';
    protected $fillable = ['user_id','date','time_in','time_out','note'];

        public function users()
    {
        return $this->belongsToMany('App\User');
    }    
}
