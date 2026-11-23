<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  
        protected $primaryKey = 'id';// primary key of the table
        protected $keyType = 'string'; //(string, etc.) UUID  
        public $incrementing = FALSE;
  protected $table = 'tag';// table name in the database
protected $fillable = [ 'title'];// fields that can be updated or inserted into the database
protected $guarded = ['id'];// fields that cannot be updated or inserted into the database

 public function posts(){
    return $this->belongsToMany(Post::class);
 }
}
