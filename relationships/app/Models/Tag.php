<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\PostTag;

class Tag extends Model
{
    protected $table = 'tags';
    // Many to many
    public function ManyPosts(){
        return $this->belongsToMany(Post::class);
      }
}
