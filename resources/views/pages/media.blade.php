@extends('partials.layouts.layout')


@section('content')

@endsection
@section('sidebar')
    @include('partials.donate')
    <div class="sidebar margin-top">
        @include('partials.action')
    </div>


@endsection