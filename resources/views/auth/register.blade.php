@extends('layouts.all')

@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-area">
    <div class="container-fluid text-center">
        <div class="breadcrumb-stye gray-bg ptb-100">
            <h2 class="page-title">register page</h2>
            <ul>
                <li><a href="{{ Route('home') }}">home</a></li>
                <li class="active">register</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- register-area start -->
<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-lg-offset-4">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-text">
                            <h2>{{ __('Register') }}</h2>
                            <span>Please Register using account detail bellow.</span>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <input input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    
                                    
                    
                
                                </div>

                                <div class="form-group row">
                                
                                        <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group row">
                                    
                                        <input id="password" type="password"  placeholder="{{ __('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    
                                </div>

                                <div class="form-group row">
                                    
                                    <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="form-control" name="password_confirmation" required>
                                    
                                </div>

                                <div class="button-box">
                                    <button type="submit" class="default-btn floatright">{{ __('Register') }}</button>
                                    <p style=" float: right;">Have account ? <a href="{{ Route('login') }}"><span style="color: blue;">log in</span></a></p>

                                </div>  

                            </form>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
