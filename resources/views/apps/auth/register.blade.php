@extends('apps.auth.layout')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{ asset('images/bg-01.jpg') }});">
					<span class="login100-form-title-1">
						Sign Up
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100 {{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Enter username">
						@if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="text" name="email" value="{{ old('email') }}" placeholder="Enter Email">
						@if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" id="password" type="password" name="password" required placeholder="Enter password">
						@if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">{{ __('Confirm Password') }}</span>
						<input class="input100" type="password" name="password_confirmation" required placeholder="Enter password">
                    </div>
                    
                    <div class="col-lg-offset-12 m-b-18" data-validate = "Role is required">
						<span class="label-input100">Role</span>
						<select class="form-control flex-lg-row-reverse" name="role" id="role" placeholder="Enter Role">
                            <option value="4">Member</option>
                            <option value="3">Manager</option>
                            <option value="2">Kantor</option>
                            <option value="1">Superuser</option>
                        </select>
						<span class="focus-input100"></span>
                    </div>
                    
					<div class="container-login100-form-btn"><center>
						<button class="login100-form-btn">
                        {{ __('Register') }}
						</button></center>
					</div>
				</form>
				
			</div>
		</div>
	</div>
@endsection