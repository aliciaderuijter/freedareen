@extends('partials.layouts.layout')

@section('content')
    @include('partials.jumbo.jumbo2')


    @endsection

@section('script')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <script>
        window.paypalCheckoutReady = function () {
            paypal.checkout.setup('6WB4Q5KMFPYGY', {
                environment: 'sandbox',
                button: 'donate'
            });
        };
    </script>

@endsection