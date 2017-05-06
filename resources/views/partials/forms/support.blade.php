<div id="supportForm" class="tab-pane fade">
    <form method="POST" action="{{action('SupportsController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <medium-editor text="{{ $support->support }}" v-on:edit="editSupport" :reuse-medium-editor-instance="false"></medium-editor>
            <textarea class="hidden" id="support"
                      name="support">{!! $support->support !!}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
        </div>
    </form>
</div>