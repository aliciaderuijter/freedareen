<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(), [
            'article' => 'required',
            'english_title' => 'required',
            'hebrew_title' => 'required',
            'arabic_title' => 'required'
        ]);

        $article = new Article();

        /*if(Story::where('language','en')){
            $story = Story::where('language','en')->first();
        } else {
            $story = new Story;
        }*/
        $article->article = $request->get('article');
        $article->enTitle = $request->get('english_title');
        $article->arTitle = $request->get('arabic_title');
        $article->heTitle = $request->get('hebrew_title');
        $article->save();

        $request->session()->flash('status', 'Article saved successfully!');

        return redirect()->back();
    }

    public function delete(Article $article, Request $request)
    {

        $article->delete();

        $request->session()->flash('status', 'Article deleted successfully!');

        return redirect()->back();
    }
}
