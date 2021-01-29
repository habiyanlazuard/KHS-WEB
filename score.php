<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{

    protected $fillable = ['nilai','id','id_course'];
    public function students(){
        return $this->belongsTo('App\Student');
    }
    public function courses(){
        return $this->belongsTo('App\Course');
    }
}
