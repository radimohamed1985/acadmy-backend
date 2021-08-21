<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class student extends Model
{
    protected $table ='student';
    protected $fillable = ['id','user','email','phone'];
    public $timestamp = true;
    public function courses(){
        return $this->belongsToMany('App\models\courses','reservation','user_id','course_id');
    }
}
