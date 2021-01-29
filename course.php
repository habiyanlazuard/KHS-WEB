<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;
    protected $fillable = ['nama_mk','sks'];
    protected $primaryKey = 'id_course';
    public function scores(){
        return $this->hasMany('App\Score');

    }
}
