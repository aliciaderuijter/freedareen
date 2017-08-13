@extends('partials.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <img src="/images/trial.jpg" class="img top-image" alt="trial">

            <p class="margin-top no-padding">{!! $trial->trial !!}</p>
        </div>
    </div>
@endsection
@section('sidebar')
    @include('partials.donate')
    <div class="sidebar margin-top">
        @include('partials.action')
    </div>
@endsection

@section('metaDescription', $trial->trial)

