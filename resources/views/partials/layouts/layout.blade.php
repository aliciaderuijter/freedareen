<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('misc.freeDareen')</title>
    <link href="/css/app.css" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ])  !!}
    </script>
</head>


<body>
<div id="app">
    @include('partials.nav')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                @yield('content')
                <div class="margin-bottom">
                    @include('partials.share')
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                @yield('sidebar')
            </div>
        </div>
    </div>

    @include('partials.footer')
</div>
<script src="/js/app.js"></script>
@yield('script')
</body>
</html>