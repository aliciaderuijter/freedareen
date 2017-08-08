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
<!-- Piwik -->
<script type="text/javascript">
    var _paq = _paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="//admin.freedareentatour.org/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Piwik Code -->
</body>
</html>