<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class comment extends Model
{ use HasFactory;
        protected $primaryKey = 'id';// primary key of the table
        protected $keyType = 'string'; //(string, etc.) UUID  
        public $incrementing = FALSE;

protected $table='comment';// table name in the database
    protected $fillable=['author','content','post_id'];// post_id is the foreign key that links the comment to the post
    protected $guarded = ['id'];// fields that cannot be updated or inserted into the database

    public function post(){
        return $this-> BelongsTo(Post::class);// define the relationship between the comment and the post -- a comment belongs to a (post not correct) Post is the model name of the post table
    }
    }
    
