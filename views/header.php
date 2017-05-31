<!doctype html>
<html>
<head>
	<title>Framework</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo PATH_URL ?>public/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo PATH_URL ?>public/css/text.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo PATH_URL ?>public/css/960_12_col.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo PATH_URL ?>public/css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo PATH_URL ?>public/js/jquery-2.1.1.js"></script>
	<!--script type="text/javascript" src="<?php echo PATH_URL ?>public/js/custom.js"></script-->
	<!--?php
		$css = $this->getCSS();
		$script = $this->getScript();
		if(isset($css)) {
			foreach ($css as $cs) {
				echo '<link rel="stylesheet" type="text/css" href="'.URL.'views/'.$cs.'" />';
			}
		}
		if(isset($script)) {
			foreach ($script as $js) {
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?-->
</head>
<body>
<div class="wrap">
	<aside>
		<ul>
			<li><div class="side-item"><a href="<?php echo PATH_URL; ?>index/doLogout">
				Log Out
			</a></div></li>

			<li><div class="side-item" style="margin-top:20px;"><a href="<?php echo PATH_URL; ?>education">
				Education and Work Experience
			</a></div></li>
			<li><div class="side-item"><a href="<?php echo PATH_URL; ?>skills">
				Skills
			</a></div></li>
			<!--li><div class="side-item"><a href="<?php echo PATH_URL; ?>projects">
				Projects
			</a></div></li-->
			<li><div class="side-item"><a href="<?php echo PATH_URL; ?>achievements">
				Achievements
			</a></div></li>
			<li><div class="side-item"><a href="<?php echo PATH_URL; ?>activities">
				Activities
			</a></div></li>

			<li><div class="side-item" style="margin-top:20px;"><a href="<?php echo PATH_URL ?>public/download/cv.pdf" download>
				International Version PDF
			</a></div></li>
			<li><div class="side-item"><a href="<?php echo PATH_URL ?>public/download/rireikisho.pdf" download>
				Japanese Version PDF
			</a></div></li>

		</ul>
	</aside>
	<div class="body">
		<header>
			<img src="<?php echo PATH_URL ?>public/img/banner.jpg" />
		</header><hr>
