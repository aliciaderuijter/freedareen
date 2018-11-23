@extends('partials.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/klQvlZQTfrI"></iframe>
            </div>
        </div>


    </div>
    <hr>
    <div class="row margin-bottom">
        <div class="col-xs-12 {{ App::getLocale() == 'en' ? 'text-left' : 'text-right' }}">
            <h2>@lang('misc.title')</h2>
            <div>

                <div class="{{ App::getLocale() == 'en' ? 'text-left' : 'text-right' }}">
                    {!! $story->story !!}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('sidebar')
    @include('partials.donate')
    <hr>
    @include('partials.album')
    <hr>
    @include('partials.action')

@endsection

@section('script')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <script>
		window.paypalCheckoutReady = function () {
			paypal.checkout.setup(
				'{{env('PAYPAL_MODE', '') == 'live' ? env('PAYPAL_LIVE_API_PASSWORD', '') : env('PAYPAL_SANDBOX_API_PASSWORD', '')}}', {
					environment: '{{ env('PAYPAL_MODE', '') }}',
					button: 'donate'
				});
		};
    </script>

@endsection

