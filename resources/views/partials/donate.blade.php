<button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
        data-target="#myModal">@lang('misc.donate')</button><h4 class="visible-xs-inline visible-lg-inline visible-md-inline visible-sm-inline"> @lang('misc.aid')</h4>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">@lang('misc.donate')</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{action('HomeController@paypal')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">@lang('misc.name')</label>
                        <input type="text" class="form-control" id="name" name="name" value="Anonymous">
                    </div>
                    <money-input title="@lang('misc.amount'):"></money-input>
                    <div class="form-group text-right">
                        <button class="btn btn-primary" id="donate">@lang('misc.donate')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
