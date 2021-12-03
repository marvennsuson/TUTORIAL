<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;

class ArticleController extends Controller
{



    public function index(){

        // dd('Hello WORLD');exit;
            // $article = Article::all();
            // return view('');

            // $article = Article::where('title' , "hello")->get();
            // $article = Article::all();
            // return view('index',compact('article'));
    }


        public function store(Request $request){

            Article::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->back();
        }
}
