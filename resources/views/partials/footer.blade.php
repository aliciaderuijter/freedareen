<footer class="navbar navbar-inverse">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-2">
                <h4>@lang('nav-footer.contact')</h4>
                <p>
                    <a href="https://www.facebook.com/FreeDareenTatour/?hc_ref=SEARCH" target="_blank">
                        <button class="btn btn-primary">
                            <i class="fa fa-fw fa-facebook">
                            </i>
                        </button>
                    </a>
                    <a href="mailto:@lang('misc.email')">
                        <button class="btn btn-default">
                            <i class="fa fa-fw fa-envelope" aria-hidden="true"></i>

                        </button>
                    </a>
                </p>
                <p>
                    <a href="mailto:@lang('misc.email')">
                        @lang('misc.email')
                    </a>
                </p>
            </div>
            <div class="col-xs-12 col-md-2">
                <h4><a href="{{action('DescriptionsController@show')}}">@lang('nav-footer.about')</a></h4>

            </div>

        </div>

        <div class="row">
            <div class="col-xs-12">
                <p class="text-right">
                    Website built for <a href="https://www.facebook.com/FreeDareenTatour/?hc_ref=SEARCH"
                                         target="_blank">Free DareenTatour</a> by <a href="mailto:nbfbce@ymail.com">The
                        Co-op.</a></p>
            </div>
        </div>
    </div>
</footer>













