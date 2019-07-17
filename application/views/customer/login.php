<!DOCTYPE html>
<html>
<head>
	<title>SIAKAD Administrator Page</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/vendor/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-12 text-center">
			<br><br>
			<h1>Login | SIAKAD</h1>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<form role="form" method="post" action="<?php echo base_url('login/auth') ?>">
						<div class="form-group">
							<label>No Blanko</label>
							<input type="text" class="form-control" name="username" placeholder="No Blanko">
						</div>
						<div class="form-group">
							<label>password</label>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<input type="submit" class="btn btn-info" value="Sign in">
					</form>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
</body>
</html>