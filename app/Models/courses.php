<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    protected $table ='courses';
    protected $fillable = ['id','course_name','price','instructor_id','lecture','hour'];
    public $timestamp = true;
    public function student(){
        return $this->belongsToMany('App\models\student','reservation','user_id','course_id');
    }
}
