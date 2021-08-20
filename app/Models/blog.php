<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
  protected $table ='blog';
  protected $fillable = ['id','blog_title','blog_editor','blog_content'];
  public $timestamp = true;

  public function comment(){
      return $this->hasMany('App\models\comment','blog_id');
  }
}
