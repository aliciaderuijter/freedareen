<div id="articles" class="tab-pane fade">
    <div class="row">

        <div class="col-xs-12">
            <ul class="list-group">
                @foreach($articles as $article)
                    <li class="list-group-item clearfix">
                        <a href="{{$article->article}}">{{ $article->{App::getLocale() . 'Title'} }}</a>
                        <form class="pull-right" method="post" action="{{action('ArticlesController@delete', $article->id)}}">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row margin-bottom">
        <form method="POST" action="{{action('ArticlesController@store')}}" class="form-inline">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="link">@lang('misc.link')</label>
                <input type="text" name="article" class="form-control" id="link">
            </div>

            <div class="form-group">
                <label for="english">@lang('misc.english')</label>
                <input type="text" name="english_title" class="form-control" id="english">
            </div>


            <div class="form-group">
                <label for="hebrew">@lang('misc.hebrew')</label>
                <input type="text" name="hebrew_title" class="form-control" id="hebrew">
            </div>


            <div class="form-group">
                <label for="arabic">@lang('misc.arabic')</label>
                <input type="text" name="arabic_title" class="form-control" id="arabic">
            </div>

            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>

        </form>
    </div>
</div>

