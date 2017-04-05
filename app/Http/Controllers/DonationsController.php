<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;


class DonationsController extends Controller
{
    public function show(Request $request)
    {
        $query = Donation::latest();

        return response()->json($query->paginate(5));
    }

    public function unsuccessful()
    {
        return view('aftermath.unsuccesful');
    }

    public function thanks(Request $request)
    {
        $navbarClass = 'no-margin';
        if($request->get('token')== null) {
            return view ('aftermath.thankyou', compact('navbarClass'));
        }
        $token = $request->get('token');
        $PayerID = $request->get('PayerID');
        $paypal = new ExpressCheckout;


        $response = $paypal->getExpressCheckoutDetails($token);
        $data = [];
        $data['items'] = [
            [
                'name' => 'Donation',
                'price' => $response['AMT'],
                'qty' => 1
            ]
        ];

        $data['invoice_id'] = $response['INVNUM'];
        $data['invoice_description'] = $response['DESC'];
        $data['return_url'] = url('/thankyou');
        $data['cancel_url'] = url('/');
        $data['total'] = $response['AMT'];

        $finalize = $paypal->doExpressCheckoutPayment($data, $token, $PayerID);

        if ($finalize['ACK'] == 'Success') {

            $donate= new Donation;
            $donate->name= $request->session()->get('name');
            $donate->amount= $response['AMT'];
            $donate->save();

            return view('aftermath.thankyou', compact('navbarClass'));

        } else {
            return redirect('unsuccessful');
        }
    }

}


