@extends('layouts.master')

@section('content')


<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    {{-- <img class="img-fluid" src="img/login.jpg" alt=""> --}}
                    <img class="img-fluid" src=" {{ asset ('img/login.jpg') }} " alt="">
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Reset Password</h3>
                    <form class="row login_form" id="contactForm" novalidate="novalidate"
                    {{-- rajout --}}
                    method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    {{-- Email --}}

                    <div class= "col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="text" class="form-control" name="email" placeholder=" Your Email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    
                    </div>
                        
                       
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Send Password Reset Link</button>
                            {{-- <a href="#">Forgot Password?</a> --}}
                            {{-- <a href="{{ route('password.request') }}">Forgot Password?</a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->



@endsection






{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
