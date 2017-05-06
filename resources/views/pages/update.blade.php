@extends('partials.layouts.editPageLayout')

@section('content')
    <div class="container main-fold">
        @if (Session::has('status'))
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-success">{{Session::get('status')}}</div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                @include('partials.errors')
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#story">@lang('misc.title')</a></li>
                    <li><a data-toggle="tab" href="#about">@lang('nav-footer.about')</a></li>
                    <li><a data-toggle="tab" href="#poems">@lang('misc.poems')</a></li>
                    <li><a data-toggle="tab" href="#supportForm">@lang('misc.support')</a></li>
                    <li><a data-toggle="tab" href="#articles">@lang('nav-footer.articles')</a></li>

                </ul>

                <div class="tab-content">
                    @include('partials.forms.story')
                    @include('partials.forms.about')
                    @include('partials.forms.articles')
                    @include('partials.forms.poems')
                    @include('partials.forms.support')
                </div>

            </div>
        </div>
    </div>

@endsection