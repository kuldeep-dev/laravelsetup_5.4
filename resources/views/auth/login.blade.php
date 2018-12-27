@extends('layouts.site')

@section('content')
<section class="login-sec">
		<img src="images/news-back.png" class="bg-image" alt="Background">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-auto">
					<div class="form-wrapper">
						<h5>Login</h5>
						<div class="social-btn">
							<a href="#" class="btn btn-fb"><img src="images/foot-facebook.svg" alt="Icon"> Login with Facebook</a>
						</div>
						<div class="social-btn">
							<a href="#" class="btn btn-linked"><img src="images/foot-linked.svg" alt="Icon"> Connect with Linkedin</a>
						</div>
                        
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" id="" name="email" value="{{ old('email') }}" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} pass-group">
								<input type="password" class="form-control" id="pwd" name="password" value="" placeholder="Password">
								<span class="eye" onclick="show()">
									<img src="images/eye.svg" id="EYE" alt="Eye">
                                </span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                             
                            
							<div class="form-group form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }}> <span class="cust-check"></span> Keep me logged in
								</label>
								<a href="#">Forgot password</a>
							</div>
							<div class="btn-sec">
								<input type="submit" class="btn btn-theme" value="Login">
							</div>
                        </form>
                        
						<div class="btn-sec">
							<a href="{{ route('register')}}">Register</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>








<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<script>
function show() {
    var a=document.getElementById("pwd");
    var b=document.getElementById("EYE");
        if (a.type=="password")  {
            a.type="text";
            b.src="images/eye-hide.svg";
        }else {
            a.type="password";
            b.src="images/eye.svg";
        }
}
</script>

@endsection
