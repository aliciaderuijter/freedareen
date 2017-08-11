<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function show()
    {

        $articles = Article::all();
        return view('pages.contact', compact('articles'));

    }

    public function email(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);

        Mail::to('freedareentatour@gmail.com')->send(new ContactUs($request->input('message'),$request->input('subject'),$request->input('email'),$request->input('name')));

        $request->session()->flash('status', 'your email was sent!');
        return redirect()->back();
    }
}
