<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //





     protected $table ="tag";



   protected $fillable = [
        'name','content','article_id'
    ];
  
      public function article(){
return $this->belongsToMany('App\Article');
} 

   
}
