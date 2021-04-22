@extends('layouts.app')
<link rel="stylesheet" href="css/auth.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
<div class="main">
		<div class="card">
			<div class="card-title">
				<h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> User <span id="action_title">Login</span></h3>
			</div>
			<div class="card-body">
				<div class="card-body-top">
                <a href="/login"><button id="login" class="btn" name="login">login</button></a>
					<a href="/register"><button id="register" class="btn" name="register">register</button></a>
					<div id="pointer-btn-login"></div>
				</div>
				<div class="card-body-login">
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                            <input class="input-form form-control @error('email') is-invalid @enderror" id="email" type="email" placeholder="Enter your email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br>

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="color:white;"> 
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                            <input class="input-form form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Enter your password" name="password" required autocomplete="current-password"><br>

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="color:white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check" style="padding:20px; color:#16dbff;">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 padding">
                                <button type="submit" class="submit-form">
                                    {{ __('Login') }}
                                </button><br/>
                                @if (Route::has('password.request'))
                                <div style="padding:20px;">
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:white;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>    
                                @endif
                               
                            </div>
                        </div>
                    </form>
					
				</div>
			</div>
		</div>
	</div>
@endsection
