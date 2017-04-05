<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{

    /**
     * @param $lang
     * @return mixed
     */
    public function switchLang(Request $request,$lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            $request->session()->put('applocale', $lang);
        }
        return Redirect::back();
    }

}
