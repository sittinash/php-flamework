<!doctype html>
<html>
<head>
	<title>Framework | Login</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo PATH_URL ?>public/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo PATH_URL ?>public/css/text.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo PATH_URL ?>public/css/960_12_col.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo PATH_URL ?>public/css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo PATH_URL ?>public/js/jquery-2.1.1.js"></script>
	<!--script type="text/javascript" src="public/js/custom.js"></script-->
	<style type="text/css">

		body {
			background: white;
		}

		.login-box {
			width: 40%;
			margin: 150px 30%;
			padding: 10px 14px;
			box-sizing: border-box;
			border-radius: 7px;
			background: #EDEDED;
			overflow: hidden;
		}

		.logo {
			width: 49%;
			float: left;
			margin-left: 6px;
			margin-right: 6px;
		}

		.panel {
			float: right;
			width: 44%;
			height: 100%;
			margin: 0px;
			padding-left: 11px;
			border-left-style: solid;
			border-width: 1px;
			border-left-color: grey;
			box-sizing: border-box;
		}

	</style>
</head>
<body>
			<div class="login-box">
						<img class="logo" src="<?php echo PATH_URL ?>public/img/logo.jpg">
						<div class="panel">
							<form action="login/doLogin" method="post">
								<label for="login">Username:</label></br>
								<input type="text" id="username" name="username"></br>
								<label for="pssw">Password:</label></br>
								<input type="password" id="password" name="password"></br>
								<label for="code">Security Code:</label></br>
								<input type="password" id="code" name="code"></br></br>
								<input type="submit" value="Login">
							</form>
						</div>
			</div>

</body>
</html>

<?php //ob_end_flush() ?>
