<div id="poems" class="tab-pane fade">
    <form method="POST" action="{{action('PoemsController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <medium-editor text="{{ $poem->poem }}"
                           v-on:edit="editPoem"
                           :reuse-medium-editor-instance="false"
                           :reuse-medium-editor-instance="false"
                           :options="{
                            paste: {
                            forcePlainText: false
                            }
                            }">
            </medium-editor>
            <textarea class="hidden" id="poem"
                      name="poem">{!! $poem->poem !!}</textarea>
        </div>
        <div class="form-group">
            <label for="twitter">Twitter text</label>
            <input type="twitter" name="twitter" class="form-control" value="{{ $tweets->has('poem') ? $tweets->get('poem') : '' }}" >


        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
        </div>
    </form>
</div>