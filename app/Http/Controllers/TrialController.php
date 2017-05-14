<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Support;
use App\Models\Trial;
use Illuminate\Http\Request;
class TrialController extends Controller
{
    public function show(){

        $trial=Trial::first();

        if (!$trial) {
            $trial = new trial();
        }

        $articles = Article::all();
        return view('pages.trial', compact('trial', 'articles'));
    }

    public function store(Request $request)
    {

        $this->validate($request, ['trial' => 'required']);


        $trial = Trial::first();
        if (!$trial) {
            $trial = new trial;
        }

        $trial-> trial= $request->get('trial');
        $trial->save();

        $request->session()->flash('status', 'Text saved successfully!');

        return redirect()->back();
    }
}
