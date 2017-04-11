@extends('partials.layouts.layout')


@section('content')
    <div class="container main-fold">
        <div class="row">
            <div class="col-xs-12">
                <h1>@lang('nav-footer.about')</h1>
                <p class="no-margin no-padding">{!! $description->description !!}</p>
            </div>
        </div>
    </div>
@endsection