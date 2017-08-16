<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Donation;
use App\Models\Story;
use App\Models\Twitter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Srmklive\PayPal\Services\ExpressCheckout;


class HomeController extends Controller
{
    public function welcome()
    {
        $story = Story::where(['language' => App::getLocale()])->first();

        if (!$story) {
            $story = new Story;
        }


        $tweet = Twitter::where('page', 'story')->first();
        if (!$tweet) {
            $tweet = new Twitter;
        }

        $donations = Donation::sum('amount');
        $people = Donation::count();

        $articles = Article::all();

        return view('pages.welcome', compact('story', 'donations', 'people', 'articles', 'tweet'));
    }

    public function paypal(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric|min:0',
        ]);

        if ($request->get('name') == null) {
            $request->session()->put('name', 'Anonymous');
        } else {

            $request->session()->put('name', $request->get('name'));
        }

        $provider = new ExpressCheckout;

        $data = [];
        $data['items'] = [
            [
                'name' => 'Donation',
                'price' => $request->get('amount'),
                'qty' => 1
            ]
        ];

        $options = [
            'BRANDNAME' => 'Free Dareen Tatour',
            'NoShipping' => 1,
            'SolutionType' => 'Sole'
        ];


        $data['invoice_id'] = uniqid();
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = url('/thankyou');
        $data['cancel_url'] = url('/');
        $data['total'] = $request->get('amount');

        $response = $provider->addOptions($options)->setExpressCheckout($data);

        return redirect($response['paypal_link']);
    }

}

