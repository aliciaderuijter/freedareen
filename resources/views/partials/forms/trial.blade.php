<div id="trial" class="tab-pane fade">
    <form method="POST" action="{{action('TrialController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <medium-editor text="{{ $trial->trial }}" v-on:edit="editTrial" :reuse-medium-editor-instance="false"></medium-editor>
            <textarea class="hidden" id="trialText"
                      name="trial">{!! $trial->trial !!}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
        </div>
    </form>
</div>