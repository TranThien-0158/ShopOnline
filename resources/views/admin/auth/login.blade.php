<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ url('admin_assets/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ url('admin_assets/dist/css/admin.css') }}">
	</head>
	<body>
		<div class="container">
		    <div class="row">
		        <div class="col-md-8 col-md-offset-2">
		            <div class="panel panel-primary" id="idLogin" >
		                <div class="panel-heading">Login</div>
		                <div class="panel-body">
		                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
		                        {{ csrf_field() }}

		                        <div class="form-group">
		                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

		                            <div class="col-md-6">
		                                <input id="email" type="email" class="form-control" name="email" value="" autofocus>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <label for="password" class="col-md-4 control-label">Password</label>

		                            <div class="col-md-6">
		                                <input id="password" type="password" class="form-control" name="password">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input type="checkbox" name="remember"> Remember Me
		                                    </label>
		                                </div>
		                                @include('admin.blocks.messages')
		                            </div>
		                        </div>
								
		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4 pull-left">
		                                <button type="submit" class="btn btn-primary">
		                                    Login
		                                    <i class="glyphicon glyphicon-log-in"></i>
		                                </button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="{{ url('admin_assets/bootstrap/js/bootstrap.min.js') }}"></script>
	</body>
</html>