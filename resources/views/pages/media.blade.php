@extends('partials.layouts.layout')


@section('content')
    <div class="row">
        <div class="col-xs-12">
            <img src="/images/dareen-media.jpg" class="img top-image" alt="media">

            <p class="margin-top no-padding">{!! $media->media !!}</p>
        </div>
    </div>
@endsection
@section('sidebar')
    @include('partials.donate')
    <div class="sidebar margin-top">
        @include('partials.action')
    </div>


@endsection