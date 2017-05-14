@extends('partials.layouts.layout')

@section('content')
    <div class="container main-fold">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/klQvlZQTfrI"></iframe>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">

                <div class="form-group text-left">
                    <h2>Dareen Tatour Legal Aid</h2>
                    <a href="@lang('misc.generosity')" target="_blank">
                        <button class="btn btn-primary btn-lg">Donate</button>
                    </a>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-md-8 {{ App::getLocale() == 'en' ? 'text-left' : 'text-right' }}">
                <h2>@lang('misc.title')</h2>
                <div>

                    <p class="{{ App::getLocale() == 'en' ? 'text-left' : 'text-right' }}">
                        {!! $story->story !!}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <h4>@lang('misc.signPetition')</h4>
                <p>
                    <a href="@lang('misc.petition')" target="_blank">
                        <button class="btn btn-danger">@lang('misc.sign')</button>
                    </a>
                </p>

                <div>
                    <img src="/images/dareen2.jpg" class="img-responsive" alt="dareen">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-2">
                <div class="'row">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=freedareentatour.org&title=Free Dareen Tatour" target="_blank">
                        <button class="btn btn-primary"><i class="fa fa-facebook fa-2"></i> Share on Facebook</button></a>

                </div>
            </div>
            <div class="col-xs-12 col-md-2">
                <div class="'row">
                    <a href="https://twitter.com/home?status=" target="_blank">
                        <button class="btn btn-social btn-twitter"><i class="fa fa-twitter"></i>Share on Twitter</button></a>
                </div>
            </div>
        </div>
    </div>
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

