<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Media;
use App\Models\Twitter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MediaController extends Controller {
	public function show() {
		$media = Media::first();

		if (!$media) {
			$media = new Media();

		}


		$tweet = Twitter::where('page', 'media')->first();
		if (!$tweet) {
			$tweet = new Twitter;

		}

		$articles = Article::all();

		return view('pages.media', compact('media', 'articles', 'tweet'));
	}

	public function store(Request $request) {

		$this->validate($request, ['media' => 'required']);


		$media = Media::where('language', App::getLocale())->first();
		if (!$media) {
			$media = new Media;
		}
		$tweet = Twitter::where('page', 'media')->first();
		if (!$tweet) {
			$tweet = new Twitter;
		}
		$media->media = $request->get('media');
		$media->language = App::getLocale();
		$media->save();

		$tweet->tweet = $request->get('twitter');
		$tweet->page = 'media';
		$tweet->save();


		$request->session()->flash('status', 'Text saved successfully!');

		return redirect()->back();

	}

}
