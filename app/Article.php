<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
   public function author()
   {
   		return $this->hasOne('App\Author');
   }

   public function category()
   {
   		return $this->hasOne('App\Category');
   }

   public function commnents()
   {
   		return $this->hasMany('App\Comment');
   }

   public function articleTags()
   {
   		return $this->hasMany('App\ArticleTag');
   }
}
