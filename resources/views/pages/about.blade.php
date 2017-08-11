@extends('partials.layouts.layout')


@section('content')

    <div class="row">
        <div class="col-xs-12">
            <h1>@lang('nav-footer.about')</h1>
            <img src="/images/dareen-3.jpg" class="img top-image" alt="about">
            <p class="no-margin no-padding">{!! $description->description !!}</p>
        </div>
    </div>
@endsection
@section('sidebar')
    @include('partials.donate')
    <div class="sidebar margin-top">
        @include('partials.action')
    </div>
@endsection
