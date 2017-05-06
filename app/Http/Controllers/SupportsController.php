<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportsController extends Controller
{
    public function show()
    {

        $support = Support::first();

        if (!$support) {
            $support = new support();
        }

        $articles = Article::all();
        return view('pages.support', compact('support', 'articles'));
    }


    public function store(Request $request)
    {

        $this->validate($request, ['support' => 'required']);


        $support = Support::first();
        if (!$support) {
            $support = new support;
        }

        $support-> support= $request->get('support');
        $support->save();

        $request->session()->flash('status', 'Text saved successfully!');

        return redirect()->back();
    }
}
