<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['nama','nik','email','jurusan'];
    public function scores(){
        return $this->hasMany('App\Score');

    }
}
