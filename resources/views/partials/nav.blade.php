<nav class="navbar navbar-default {{ $navbarClass ?? '' }}">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{action('HomeController@welcome')}}">لحرية لدارين طاطور Free Dareen</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="{{action('HomeController@welcome')}}">@lang('nav-footer.home')</a></li>
                <li><a href="{{action('DescriptionsController@show')}}">@lang('nav-footer.about')</a></li>
                <li><a href="{{action('PoemsController@show')}}">@lang('nav-footer.poems')</a></li>
                <li><a href="{{action('SupportsController@show')}}">@lang('nav-footer.support')</a></li>
                <li><a href="{{action('TrialController@show')}}">@lang('nav-footer.trial')</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('nav-footer.articles')
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        @foreach($articles as $article)
                            <li>
                                <a href="{{$article->article}}"
                                   target="_blank">{{ $article->{App::getLocale() . 'Title'} }}</a>
                            </li>
                            <li><a href="{{action('ContactController@show')}}">@lang('nav-footer.contact')</a></li>

                        @endforeach

                    </ul>
                <li><a href="{{action('ContactController@show')}}">@lang('nav-footer.contact')</a></li>

                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        {{ Config::get('languages')[App::getLocale()] }}

                        <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{action ('LanguageController@switchLang', $lang) }}">{{$language}}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>