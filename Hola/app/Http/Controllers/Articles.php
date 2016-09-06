<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class Articles extends Controller
{
    //


    public function index(){

    //return view('welcome');

$article = Article::find(2);
/* recorrer $article->each(function($article){

});*/

$article->category;
$article->user;
    
//dd($article);
return view('welcome',['article' => $article]);
    }
}
