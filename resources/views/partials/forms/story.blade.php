<div id="story" class="tab-pane fade in active">
    <form method="POST" action="{{action('StoriesController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <medium-editor text="{{ $story->story }}" v-on:edit="editStory"
                           :reuse-medium-editor-instance="false"
                           :reuse-medium-editor-instance="false"
                           :options="{
                            paste: {
                            forcePlainText: false
                            }
                            }">
            </medium-editor>
            <textarea id="storyText" class="hidden"
                      name="story">{!! $story->story !!}</textarea>
        </div>
        <div class="form-group">
            <label for="twitter">Twitter text</label>
            <input type="twitter" name="twitter" class="form-control"
                   value="{{ $tweets->has('story') ? $tweets->get('story') : ''  }}">


        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">@lang('misc.publish')</button>
        </div>
    </form>
</div>