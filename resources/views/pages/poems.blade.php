@extends('partials.layouts.layout')


@section('content')
    <div class="container main-fold">
        <div class="row">
            <div class="col-xs-12">
                <p class="no-margin no-padding">{!! $poem->poem !!}</p>
            </div>
        </div>
    </div>


    @endsection
