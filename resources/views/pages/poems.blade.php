@extends('partials.layouts.layout')


@section('content')
    <div class="row margin-bottom">
        <div class="col-xs-12">
            <img src="/images/poem.jpg" class="img top-image" alt="poem">

            <p class="no-margin no-padding">{!! $poem->poem !!}</p>
        </div>
    </div>
@endsection

@section('sidebar')
    @include('partials.donate')
    <div class="sidebar margin-top">
        @include('partials.action')
    </div>
@endsection


