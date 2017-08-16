<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Description;
use App\Models\Twitter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DescriptionsController extends Controller
{

      public function show (){

          $description = Description::where(['language' => App::getLocale()])->first();

          if(! $description){
              $description = new Description();
          }

          $tweet = Twitter::where('page', 'about')->first();
          if (!$tweet) {
              $tweet = new Twitter;
          }
          $articles= Article::all();
          return view ('pages.about', compact('description','articles', 'tweet'));

      }
    public function store(Request $request)
    {
        $this->validate(request(), ['description' => 'required']);

        $description = Description::where('language', App::getLocale())->first();
        if (!$description) {
            $description = new Description();
        }
        $tweet = Twitter::where('page', 'about')->first();
        if (!$tweet) {
            $tweet = new Twitter;
        }

        $description->description = $request->get('description');
        $description->language = App::getLocale();
        $description->save();

        $tweet->tweet = $request->get('twitter');
        $tweet->page = 'about';
        $tweet->save();


        $request->session()->flash('status', 'About Us saved successfully!');

        return redirect()->back();
    }
}
