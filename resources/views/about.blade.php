@extends('partials.layouts.layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>@lang('nav-footer.about')</h1>
                <pre class="wrapped no-margin no-padding">{{$description->description}}</pre>
            </div>
        </div>
    </div>
@endsection