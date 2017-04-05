@extends('partials.layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/klQvlZQTfrI"></iframe>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <h2>
                  <strong> ${{$donations}} USD </strong>
                </h2>
                <h4>@lang('misc.donatedBy') {{$people}} @lang('misc.people').</h4>

                @include('donate')
                @include('partials.errors')

                <donations-table class="margin-top" url="{{ action('DonationsController@show') }}"></donations-table>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <h2>@lang('misc.title')</h2>
                <div>
                    <p>
                      <pre class="wrapped">{{$story->story}}</pre>
                    </p>
                </div>
            </div>

        </div>
    </div>
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

