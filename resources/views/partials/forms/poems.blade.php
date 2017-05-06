<div id="poems" class="tab-pane fade">
    <form method="POST" action="{{action('PoemsController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <medium-editor text="{{ $poem->poem }}" v-on:edit="editPoem" :reuse-medium-editor-instance="false"></medium-editor>
            <textarea class="hidden" id="poem"
                      name="poem">{!! $poem->poem !!}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
        </div>
    </form>
</div>