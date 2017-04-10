<nav class="navbar navbar-default {{ $navbarClass ?? '' }}">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{action('HomeController@welcome')}}">لحرية لدارين طاطور Free Dareen</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{action('HomeController@welcome')}}">@lang('nav-footer.home')</a></li>
            <li><a href="{{action('DescriptionsController@show')}}">@lang('nav-footer.about')</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('nav-footer.articles')
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">

                        @foreach($articles as $article)
                        <li>
                            <a href="{{$article->article}}" target="_blank">{{ $article->{App::getLocale() . 'Title'} }}</a>
                        </li>
                        @endforeach

                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{ Config::get('languages')[App::getLocale()] }}

                    <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <li>
                                <a href="{{action ('LanguageController@switchLang', $lang) }}">{{$language}}</a>
                            </li>
                            @endif
                            @endforeach
                            </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>