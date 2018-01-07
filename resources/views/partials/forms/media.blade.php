<div id="media" class="tab-pane fade">
    <form method="POST" action="{{action('MediaController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <medium-editor text="{{ $media->media }}"
                           v-on:edit="editMedia"
                           :reuse-medium-editor-instance="false"
                           :options="{
                                paste: { 
                                    forcePlainText: false
                                }
                            }">
            </medium-editor>
            <textarea class="hidden" id="mediaText"
                      name="media">{!! $media->media !!}</textarea>
        </div>

        <div class="form-group">
            <label for="twitter">Twitter text</label>
            <input type="twitter" class="form-control" name="twitter"
                   value="{{ $tweets->has('media') ? $tweets->get('media') : ''  }}">


        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
        </div>
    </form>
</div>