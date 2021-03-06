<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login - dobelde.com</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

<link href="<?=base_url()?>assets/genchan/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>assets/genchan/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="<?=base_url()?>assets/genchan/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/genchan/css/css.css" rel="stylesheet">

<link href="<?=base_url()?>assets/genchan/css/style.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>assets/genchan/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="navbar navbar-fixed-top">

	<div class="navbar-inner">

		<div class="container">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="index.html">
				dobelde.com
			</a>

			<div class="nav-collapse">
				<ul class="nav pull-right">

					<li class="">
						<a href="signup.html" class="">
							Don't have an account?
						</a>

					</li>

					<li class="">
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>

					</li>
				</ul>

			</div><!--/.nav-collapse -->

		</div> <!-- /container -->

	</div> <!-- /navbar-inner -->

</div> <!-- /navbar -->



<div class="account-container">

	<div class="content clearfix">

		<form action="#" method="post">

			<h1>Member Login</h1>

			<div class="login-fields">

				<p>Please provide your details</p>

				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->

				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->

			</div> <!-- /login-fields -->

			<div class="login-actions">

				<span class="login-checkbox">
					<label class="choice" for="Field">Reset Password</label>
				</span>

				<button class="button btn btn-success btn-large">Sign In</button>

			</div> <!-- .actions -->



		</form>

	</div> <!-- /content -->

</div> <!-- /account-container -->


<script src="<?=base_url()?>assets/genchan/js/jquery-1.7.2.min.js"></script>
<script src="<?=base_url()?>assets/genchan/js/bootstrap.js"></script>

<script src="<?=base_url()?>assets/genchan/js/signin.js"></script>

</body>

</html>
