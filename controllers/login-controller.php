<?php

	/*
	Author: Sittinut CHIVAKUNAKORN
	Copyright (c) Heisenberg Web Design and Implement
	*/

	class Login extends Controller
	{

		function Login()
		{
			parent::Controller();
		}

		function doLogin()
		{
			Logger::write('Function Login.doLogin() is called.', 'Login.doLogin');

			require 'scripts/doLogin-script.php';
			$script = new DoLoginScript();
			$result = $script->run();
			if($result == 1)
				$this->headToPage('index');
			else
				$this->headToPage('login');
		}

	}

?>
