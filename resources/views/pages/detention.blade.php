@extends('partials.layouts.layout')


@section('content')
    <div class="row">
        <div class="col-xs-12">
            <img src="/images/dareen-demo.jpg" class="img top-image" alt="detention">

            <p class="margin-top no-padding">{!! $detention->detention !!}</p>
        </div>
    </div>
@endsection
@section('sidebar')
    @include('partials.donate')
    <div class="sidebar margin-top">
        @include('partials.action')
    </div>


    @endsection