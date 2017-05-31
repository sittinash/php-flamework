<?php

	/*
	Author: Sittinut CHIVAKUNAKORN
	Copyright (c) Heisenberg Web Design and Implement
	*/

	class Index extends ControllerWithPermission
	{

		function Index()
		{
			parent::ControllerWithPermission();
		}

		protected function _checkPermission()
		{
			$permission = (Session::get('user_no') > -1)? 1:0;

			Logger::write('[Integer] Session::get(\'user_no\'): '.Session::get('user_no').'.', 'ControllerWithPermission._checkPermission');

			return $permission;
		}

	}

?>
