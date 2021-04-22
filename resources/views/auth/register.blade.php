@extends('layouts.app')
<link rel="stylesheet" href="css/auth.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
<div class="main">
		<div class="card">
			<div class="card-title">
				<h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> User <span id="action_title">Register</span></h3>
			</div>
			<div class="card-body">
				<div class="card-body-top">
                <a href="/login"><button id="login" class="btn" name="login">login</button></a>
					<a href="/register"><button id="register" class="btn" name="register">register</button></a>
					<div id="pointer-btn-register"></div>
				</div>
				<div class="card-body-login">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror input-form" placeholder="Enter your first name" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                                <br/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert" style="color:white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror input-form" placeholder="Enter your last name" name="lname" value="{{ old('lname') }}" required autocomplete="lname">
                                <br/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert" style="color:white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-form" placeholder="Enter your email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <br/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="color:white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-form" placeholder="Enter your password" name="password" required autocomplete="new-password">
                                <br/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="color:white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input-form" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-md-6" >
                                <input id="dob" type="date" style="color:white;" class="form-control @error('dob') is-invalid @enderror input-form" name="dob" value="{{ old('dob') }}" required autocomplete="dob">
                                <br/>
                                @error('dob')
                                    <span class="invalid-feedback" role="alert" style="color:white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" style="padding:20px;">
                                <button type="submit" class="submit-form" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
			</div>
		</div>
	</div>    
@endsection
