<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Description;
use App\Models\Poem;
use App\Models\Story;
use App\Models\Support;
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

        $poem = Poem::first();

        if (!$poem) {
            $poem = new Poem;

        }

        $support = Support::first();

        if (!$support) {
            $support = new support;

        }

        $articles = Article::all();

        return view('pages.update', compact('story', 'description', 'articles', 'poem', 'support'));
    }


    public function store(Request $request)
    {
        $this->validate(request(), ['story' => 'required']);

        $story = Story::where('language', App::getLocale())->first();
        if (!$story) {
            $story = new Story;
        }
        /*if(Story::where('language','en')){
            $story = Story::where('language','en')->first();
        } else {
            $story = new Story;
        }*/
        $story->story = $request->get('story');
        $story->language = App::getLocale();
        $story->save();

        $request->session()->flash('status', 'Story saved successfully!');

        return redirect()->back();
    }

}