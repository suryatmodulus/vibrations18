@extends('layouts.app')

@section('content')
<div class="main-section">
    <div class="row text-center">
        @if (!empty($success))
            <div class="col center-block">
                <img class="img-logo img-responsive center-block" src="{{ asset('images/success_logo.png') }}" alt="">
                <a href="{{route('registration')}}"><button class="sm-register-now-btn">Register Again?</button></a>
            </div>
        @endif
       
    </div>
</div>
@endsection
