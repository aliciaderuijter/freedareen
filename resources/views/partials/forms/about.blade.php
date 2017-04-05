<div id="about" class="tab-pane fade">
    <form method="POST" action="{{action('DescriptionsController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <textarea class="form-control big" id="description"
                      name="description">{{$description->description}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
        </div>
    </form>
</div>