<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    protected $table ='courses';
    protected $fillable = ['id','course_name','price','instructor_id','lecture'];
    public $timestamp = true;
    public function team(){
        return $this->belongsTo('App\models\team','instructor_id');
    }
}
