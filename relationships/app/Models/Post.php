<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\PostTag;


class Post extends Model
{
    protected $table = 'posts';
 
    // one to one
    function HasOnePost(){
      return $this->hasOne(Comment::class);
    }
    //one to many
    public function HasManyPost1(){
        return $this->HasMany(Comment::class);
    }
    // Many to many
    public function ManyTags(){
      return $this->belongsToMany(Tag::class);
    }

    
}