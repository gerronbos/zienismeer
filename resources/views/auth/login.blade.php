<!-- All the files that are required -->
<link href="css/bootstrap.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								{{--<a href="#" class="active" id="login-form-link">Login</a>--}}
							</div>
							<div class="col-xs-6">
								{{--<a href="#" id="register-form-link">Register</a>--}}
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								{!! Form::open() !!}
								    @if($errors->has('login_fail'))
                                        <div class="alert alert-danger" role="alert">{{$errors->first('login_fail')}}</div>
								    @endif
									<div class="form-group @if($errors->has('email')) has-error @endif">
									    {!! Form::text('email','',['class'=>'form-control','placeholder'=>'Email']) !!}
										@if($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
									</div>
									<div class="form-group @if($errors->has('password')) has-error @endif">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Wachtwoord">
										@if($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Blijf ingelogd</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													{{--<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>--}}
												</div>
											</div>
										</div>
									</div>
								{!! Form::close() !!}
								{{--<form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">--}}
									{{--<div class="form-group">--}}
										{{--<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">--}}
									{{--</div>--}}
									{{--<div class="form-group">--}}
										{{--<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">--}}
									{{--</div>--}}
									{{--<div class="form-group">--}}
										{{--<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">--}}
									{{--</div>--}}
									{{--<div class="form-group">--}}
										{{--<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">--}}
									{{--</div>--}}
									{{--<div class="form-group">--}}
										{{--<div class="row">--}}
											{{--<div class="col-sm-6 col-sm-offset-3">--}}
												{{--<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">--}}
											{{--</div>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</form>--}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>

<script>
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>