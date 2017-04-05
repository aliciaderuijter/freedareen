<?php

namespace App\Http\Controllers;

use App\Models\Description;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DescriptionsController extends Controller
{

      public function show (){

          $description = Description::where(['language' => App::getLocale()])->first();

          if(! $description){
              $description = new Description();
          }

          return view ('about', compact('description'));

      }
    public function store(Request $request)
    {
        $this->validate(request(), ['description' => 'required']);

        $description = Description::where('language', App::getLocale())->first();
        if (!$description) {
            $description = new Description();
        }
        /*if(Story::where('language','en')){
            $story = Story::where('language','en')->first();
        } else {
            $story = new Story;
        }*/
        $description->description = $request->get('description');
        $description->language = App::getLocale();
        $description->save();

        $request->session()->flash('status', 'About Us saved successfully!');

        return redirect()->back();
    }
}
