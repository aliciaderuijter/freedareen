@extends('partials.layouts.layout')

@section('content')
    <div class="row margin-bottom">
        <div class="col-xs-12">
            <img src="/images/dareen-email.jpg" class="img top-image" alt="contact">

        </div>
    </div>


@endsection

@section('sidebar')
    <div class="container">

        <div class="col-md-5">
            <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
            @if (Session::has('status'))
                <div class="row">
                    <div class="col-xs-12">
                        <div class="alert alert-success">{{Session::get('status')}}</div>
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="Post" action="{{action('ContactController@email')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                           required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" name="message"
                              placeholder="Message"></textarea>
                </div>

                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Send</button>
            </form>
        </div>
    </div>

@endsection