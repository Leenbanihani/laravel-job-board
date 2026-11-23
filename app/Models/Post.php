<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{//2------SITUATION
  USE HasUuids;
 use HasFactory;
   protected $primaryKey = 'id';// primary key of the table
   //1-----INT SITUATION
      // protected $keyType = 'int'; // type of the primary key (int)
     // public $incrementing = true; // whether the primary key is auto-incrementing
     //2-------UUID SITUATION
       protected $keyType = 'string'; //(string, etc.) UUID  
       public $incrementing = FALSE; // whether the primary key is auto-incrementing UUID SITUATION
       

protected $table = 'post';// table name in the database
protected $fillable = [ 'title','body','author','published'];// fields that can be updated or inserted into the database
protected $guarded = ['id'];// fields that cannot be updated or inserted into the database



public function comments()
{

return $this->hasMany(comment::class);// one post can have many comments

}
 public function tags(){
    return $this->belongsToMany(Tag::class);
 }
}
