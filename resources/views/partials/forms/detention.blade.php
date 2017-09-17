<div id="detention" class="tab-pane fade">
    <form method="POST" action="{{action('DetentionsController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <medium-editor text="{{ $detention->detention }}"
                           v-on:edit="editDetention"
                           :reuse-medium-editor-instance="false"
                           :options="{
                                paste: {
                                    forcePlainText: false
                                }
                            }">
            </medium-editor>
            <textarea class="hidden" id="detentionText"
                      name="detention">{!! $detention->detention !!}</textarea>
        </div>

        <div class="form-group">
            <label for="twitter">Twitter text</label>
            <input type="twitter" class="form-control" name="twitter"
                   value="{{ $tweets->has('detention') ? $tweets->get('detention') : ''  }}">


        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
        </div>
    </form>
</div>