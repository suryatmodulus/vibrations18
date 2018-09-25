@extends('layouts.app')

@section('content')
<div class="main-section">
    <div class="row text-center">
        <div class="col center-block">
            <img class="img-logo img-responsive center-block" src="{{ asset('images/full_logo.png') }}" alt="">
            <a href="{{route('registration')}}"><button class="register-now-btn">Register Now</button></a>
        </div>
    </div>
</div>
<div class="credits">
    Developed By Surya T
</div>
@endsection
