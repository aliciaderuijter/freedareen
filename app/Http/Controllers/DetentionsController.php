<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Detention;
use App\Models\Twitter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DetentionsController extends Controller
{
    public function show()

    {
        $detention = detention::first();

        if (!$detention) {
            $detention = new detention();

        }


        $tweet = Twitter::where('page', 'detention')->first();
        if (!$tweet) {
            $tweet = new Twitter;

        }

        $articles = Article::all();
        return view('pages.detention', compact('detention', 'articles', 'tweet'));
    }

    public function store(Request $request)
    {

        $this->validate($request, ['detention' => 'required']);


        $detention = Detention::where('language', App::getLocale())->first();
        if (!$detention) {
            $detention = new detention;
        }
        $tweet = Twitter::where('page', 'detention')->first();
        if (!$tweet) {
            $tweet = new Twitter;
        }
        $detention->detention = $request->get('detention');
        $detention->language = App::getLocale();
        $detention->save();

        $tweet->tweet = $request->get('twitter');
        $tweet->page = 'detention';
        $tweet->save();


        $request->session()->flash('status', 'Text saved successfully!');

        return redirect()->back();

    }
}
