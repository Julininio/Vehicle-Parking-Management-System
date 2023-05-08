<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vehicle Parking System</title>
	<link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet">
	<link href="{{ asset("/assets/css/datepicker3.css") }}" rel="stylesheet">
	<link href="{{ asset("/css/styles.css") }}" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		<center><h2><b>Vehicle Parking System</b></h2></center>
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Please Log In To Continue</div>
				<div class="panel-body">
					<form method="POST" action="/login">
                        @csrf
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" value="nangosha">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="passwords">
							</div>
							<div class="checkbox">
								<a href="{{ url("/forgot-password") }}" style="text-decoration:none;">Forgot Password?</a>
							</div>
							<button class="btn btn-success" type="submit">Login</button>
                        </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="{{ asset("/assets/js/jquery-1.11.1.min.js") }}"></script>
	<script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
</body>
</html>
