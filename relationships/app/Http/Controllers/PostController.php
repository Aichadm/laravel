<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;


class PostController extends Controller
{
   //  one to one
   public function hasOne()
   {
       $data = Post::find(1)->HasOnePost;
       return view('article',compact('data'));
   }
   // one to many
   public function hasMany()
   {
       $data = Post::find(1)->HasManyPost1;
       return view('article',compact('data'));
   }
     // many to many
     public function PostTag(){
        $Post = Post::find(1)->ManyTags;
        return view('article',compact('Post'));
       
      }
   

}

