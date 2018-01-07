<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Description;
use App\Models\Detention;
use App\Models\Media;
use App\Models\Poem;
use App\Models\Story;
use App\Models\Support;
use App\Models\Trial;
use App\Models\Twitter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StoriesController extends Controller
{
    public function update(Request $request)
    {
        $story = Story::where(['language' => App::getLocale()])->first();

        if (!$story) {
            $story = new Story;
        }
        $description = Description::where(['language' => App::getLocale()])->first();

        if (!$description) {
            $description = new Description;
        }

        $detention = Detention::where(['language' => App::getLocale()])->first();

        if (!$detention) {
            $detention = new Detention;
        }

        $media = Media::where(['language' => App::getLocale()])->first();

        if (!$media) {
            $media = new media;

        }


        $poem = Poem::first();

        if (!$poem) {
            $poem = new Poem;

        }

        $support = Support::first();

        if (!$support) {
            $support = new support;

        }

        $trial = Trial::first();

        if (!$trial) {
            $trial = new trial;

        }


        $articles = Article::all();
        $tweets = Twitter::all()->pluck('tweet', 'page');


        return view('pages.update', compact('story', 'description', 'articles', 'poem', 'support', 'trial', 'detention','media', 'tweets', 'tweet'));
    }


    public function store(Request $request)
    {
        $this->validate(request(), ['story' => 'required']);

        $story = Story::where('language', App::getLocale())->first();
        if (!$story) {
            $story = new Story;
        }

        $tweet = Twitter::where('page', 'story')->first();
        if (!$tweet) {
            $tweet = new Twitter;
        }

        $story->story = $request->get('story');
        $story->language = App::getLocale();
        $story->save();

        $tweet->tweet = $request->get('twitter');
        $tweet->page = 'story';
        $tweet->save();


        $request->session()->flash('status', 'Story saved successfully!');

        return redirect()->back();
    }

}