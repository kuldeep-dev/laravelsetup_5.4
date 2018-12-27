@extends('layouts.site')

@section('content')


<section class="login-sec">
		<img src="images/news-back.png" class="bg-image" alt="Background">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-auto">
					<div class="form-wrapper">
						<h5>Register</h5>
						<form class="login-form" id="user-form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
							<div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" value="" placeholder="First Name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group pass-group">
								<input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
								<span class="eye" onclick="myFunction()">
									<img src="images/eye.svg" id="EYE" alt="Eye">
                                </span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group pass-group">
								<input type="password" class="form-control" id="cpassword" name="password_confirmation" value="" placeholder="Confirm Password">
								<span class="eye" onclick="cmyFunction()">
									<img src="images/eye.svg" id="cEYE" alt="Eye">
								</span>
							</div>
							<div class="form-group form-check register-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox"> <span class="cust-check"></span> By Register for an account you agree to your <a href="#">Terms and Conditions</a>
								</label>
							</div>
							<div class="btn-sec">
								<input type="submit" class="btn btn-theme" value="Register">
							</div>
						</form>
						<div class="register-login">
							<p>Do you have an account?</p>
							<a href="{{ route('login')}}">Login</a>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<script> 
    
    $("#user-form").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                password: { 
                    required: true,
                    minlength: 6
                },
                cpassword: {
                    equalTo: "#password"
                },
                tnc:"required",
            },
            messages: {
                name: "Please enter your name",
                email: "Please enter a valid email address",
                password: "Atleast 6 characters need to be entered.",
                tnc:"Terms and Condition not selected",
                cpassword: {
                    equalTo: "Password and confirm password should be same"
                }
            
            }
        });
           
    
    function myFunction() {
    var a=document.getElementById("password");
    var b=document.getElementById("EYE");
    if (a.type=="password")  {
    a.type="text";
    b.src="images/eye-hide.svg";
    }
    else {
    a.type="password";
    b.src="images/eye.svg";
    }
    }
    
    function cmyFunction() {
    var a=document.getElementById("cpassword");
    var b=document.getElementById("cEYE");
    if (a.type=="password")  {
    a.type="text";
    b.src="images/eye-hide.svg";
    }
    else {
    a.type="password";
    b.src="images/eye.svg";
    }
    }
    
    </script>

@endsection
