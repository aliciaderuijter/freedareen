<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Poem;
use App\Models\Twitter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class PoemsController extends Controller
{
    public function show()
    {

        $poem = Poem::first();

        if (!$poem) {
            $poem = new poem();
        }

        $tweet = Twitter::where('page', 'poem')->first();
        if (!$tweet) {
            $tweet = new Twitter;
        }

        $articles = Article::all();
        return view('pages.poems', compact('poem', 'articles', 'tweet'));
    }


    public function store(Request $request)
    {

        $this->validate($request, ['poem' => 'required']);


        $poem = Poem::first();
        if (!$poem) {
            $poem = new poem;
        }

        $tweet = Twitter::where('page', 'poem')->first();
        if (!$tweet) {
            $tweet = new Twitter;
        }

        $poem->poem = $request->get('poem');
        $poem->save();

        $tweet->tweet = $request->get('twitter');
        $tweet->page = 'poem';
        $tweet->save();


        $request->session()->flash('status', 'Poem saved successfully!');

        return redirect()->back();
    }
}
