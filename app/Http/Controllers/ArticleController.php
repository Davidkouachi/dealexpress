<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
   public function index()
   {
      return view('article.index');
   }

   public function index_detail()
   {
      return view('article.detail');
   }

   public function index_liste_article()
   {
      return view('liste.article');
   }

   public function index_liste_detail()
   {
      return view('liste.detail');
   }

}
