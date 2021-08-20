<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table ='comment';
  protected $fillable = ['id','comment_editor','blog_id','comment_content'];
  public $timestamp = true;
  public function blog(){
      return $this->belongsTo('App\models\blog','blog_id');
  }
}
