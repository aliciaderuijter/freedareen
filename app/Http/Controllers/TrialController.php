<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Support;
use App\Models\Trial;
use App\Models\Twitter;
use Illuminate\Http\Request;
class TrialController extends Controller
{
    public function show(){

        $trial=Trial::first();

        if (!$trial) {
            $trial = new trial();
        }

        $tweet = Twitter::where('page', 'trial')->first();
        if (!$tweet) {
            $tweet = new Twitter;

        }

        $articles = Article::all();
        return view('pages.trial', compact('trial', 'articles', 'tweet'));
    }

    public function store(Request $request)
    {

        $this->validate($request, ['trial' => 'required']);


        $trial = Trial::first();
        if (!$trial) {
            $trial = new trial;
        }
        $tweet = Twitter::where('page', 'trial')->first();
        if (!$tweet) {
            $tweet = new Twitter;
        }
        $trial-> trial= $request->get('trial');
        $trial->save();

        $tweet->tweet = $request->get('twitter');
        $tweet->page = 'trial';
        $tweet->save();


        $request->session()->flash('status', 'Text saved successfully!');

        return redirect()->back();
    }
}
