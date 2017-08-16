<div id="about" class="tab-pane fade">
    <form method="POST" action="{{action('DescriptionsController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <medium-editor text="{{ $description->description }}" v-on:edit="editAbout" :reuse-medium-editor-instance="false"></medium-editor>
            <textarea class="hidden" id="description"
                      name="description">{!! $description->description !!}</textarea>
        </div>

        <div class="form-group">
            <label for="twitter">Twitter text</label>
            <input type="twitter" class="form-control" name="twitter" value="{{ $tweets->has('about') ? $tweets->get('about') : ''  }}">


        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
        </div>
    </form>
</div>