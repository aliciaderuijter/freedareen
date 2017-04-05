<div id="story" class="tab-pane fade in active">
    <form method="POST" action="{{action('StoriesController@store')}}">
    {{ csrf_field() }}

    <div class="form-group">
        <textarea class="form-control big" id="story"
                  name="story">{{$story->story}}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
    </div>
</form>
</div>