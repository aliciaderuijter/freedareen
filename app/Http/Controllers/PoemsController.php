<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Poem;
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

        $articles = Article::all();
        return view('pages.poems', compact('poem', 'articles'));
    }


    public function store(Request $request)
    {

        $this->validate($request, ['poem' => 'required']);


        $poem = Poem::first();
        if (!$poem) {
            $poem = new poem;
        }

        $poem->poem = $request->get('poem');
        $poem->save();

        $request->session()->flash('status', 'Poem saved successfully!');

        return redirect()->back();
    }
}
