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
                    <li>
                        <a href="https://arablit.org/2016/04/27/the-poem-for-which-dareen-tatours-under-house-arrest-resist-my-people-resist-them/"
                           target="_blank">The Poem for Which Dareen Tatour’s Under House Arrest: ‘Resist, My People,
                            Resist Them’</a></li>
                    <li><a href="http://mondoweiss.net/2016/10/trials-dareen-detention/" target="_blank">The Trials of
                            Dareen Tatour: A year of detention and no end in sight
                        </a></li>
                    <li><a href="http://mondoweiss.net/2017/02/continues-dareen-posting/" target="_blank">The trial
                            continues: Dareen Tatour and the crime of posting while Arab </a></li>

                    <li><a href="https://freehaifa.wordpress.com/tag/kim-jensen/" target="_blank">How Dareen Tatour was
                            forced to sign a “confession” she was not allowed to read!</a></li>
                    <li><a href="http://www.albiladdailyeng.com/the-case-of-dareen-tatour/" target="_blank">The Case of
                            Dareen Tatour</a></li>
                    <li><a href="http://www.rebelion.org/noticia.php?id=224868&titular=el-juicio-surrealista-de-dareen-tatour-" target="_blank">El juicio surrealista de Dareen Tatour</a></li>


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