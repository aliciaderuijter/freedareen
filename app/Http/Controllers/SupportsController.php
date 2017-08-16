<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Support;
use App\Models\Twitter;
use Illuminate\Http\Request;

class SupportsController extends Controller
{
    public function show()
    {

        $support = Support::first();

        if (!$support) {
            $support = new support();
        }
        $tweet = Twitter::where('page', 'support')->first();
        if (!$tweet) {
            $tweet = new Twitter;
        }
        $articles = Article::all();
        return view('pages.support', compact('support', 'articles','tweet'));
    }


    public function store(Request $request)
    {

        $this->validate($request, ['support' => 'required']);


        $support = Support::first();
        if (!$support) {
            $support = new support;
        }

        $tweet = Twitter::where('page', 'support')->first();
        if (!$tweet) {
            $tweet = new Twitter;
        }

        $support-> support= $request->get('support');
        $support->save();

        $tweet->tweet = $request->get('twitter');
        $tweet->page = 'support';
        $tweet->save();

        $request->session()->flash('status', 'Text saved successfully!');

        return redirect()->back();
    }
}
