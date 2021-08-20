<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $table ='team';
    protected $fillable = ['id','instructor_name','instructor_role','instructor_image'];
    public $timestamp = true;

    public function courses(){
        return $this->hasMany('App\models\courses','instructor_id');
}
}