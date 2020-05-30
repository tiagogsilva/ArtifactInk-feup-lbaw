@extends('layouts.auth')

@section('title', ' - Recover Password')

@section('content')

@if(true) 
<!-- Muda ali o true e chapa ali o token que queres -->
<form class="form-signin" method="POST" action="#">

    <a href="{{ url('/') }}">
        <img class="mb-4" src="{{ asset('/assets/artifact_ink_letters_white.png') }}" alt="ArtifactInk" width="300">
    </a>

    <div class="sign-box">

        <h1 class="h3 mb-3 font-weight-normal">Reset Password</h1>

        <div class="form-group password-input">
            <label for="inputNewPassword">Password</label>
            <input type="password" class="form-control" id="inputNewPassword" placeholder="Password" name="password"
                required autofocus>
        </div>

        <div class="form-group password-input">
            <label for="inputRepeatPassword">Confirm Password</label>
            <input type="password" class="form-control" id="inputRepeatPassword" placeholder="Repeat Password"
                name="passwordConfirm" required autofocus>
        </div>

        <div>
            <button class="btn button btn-lg btn-block" type="submit">Recover Password</button>
        </div>

    </div>
</form>
@else

<div class="form-signin">

    <a href="{{ url('/') }}">
        <img class="mb-4" src="{{ asset('/assets/artifact_ink_letters_white.png') }}" alt="ArtifactInk" width="300">
    </a>

    <div class="sign-box ">
        
        <div class="d-flex justify-content-center">
             <h1 class="h3 mb-3 font-weight-normal">Request Timeout</h1>
        </div>
    
        <div class="d-flex justify-content-center">
            Password reset request has expired!
        </div>

        <a class="btn button btn-lg btn-block mt-3" href="{{ url('/')}}" > Home Page </a>
    </div>

</div>

@endif

<div class="row new-user justify-content-center">
    <footer class="copyright"> Copyright © ArtifactInk 2020 </footer>
</div>

@endsection