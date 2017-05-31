<?php

	/*
	Author: Sittinut CHIVAKUNAKORN
	Copyright (c) Heisenberg Web Design and Implement
	*/

	class ControllerWithPermission extends Controller
	{

		function ControllerWithPermission()
		{
			Session::init();
			$this->view = new View();

			Logger::write('[Array] $_SESSION: '.var_export($_SESSION, true).'.', 'ControllerWithPermission.Controller');
		}

		protected function _checkPermission()
		{
			$permission = (Session::get('user_no') > -1)? 1:0;

			Logger::write('[Integer] Session::get(\'user_no\'): '.Session::get('user_no').'.', 'ControllerWithPermission._checkPermission');

			return $permission;
		}

		function renderView($name, $renderOpt)
		{
			if(!file_exists('views/'.$name.'.php'))
			{
				Logger::write('[File] views/'.$name.'.php not found.', 'ControllerWithPermission.renderView', logEnum::TYPE_ERR);

				$this->headToPage(PAGE_ERR_VIEW_NOT_FOUND);
				return ;
			}

			$permission = $this->_checkPermission();

			Logger::write('[Integer] $permission: '.$permission.'.', 'ControllerWithPermission.renderView');

			if(!$permission)
			{
				Logger::write('Permission not granted.', 'ControllerWithPermission.renderView', logEnum::TYPE_ERR);

			  $this->headToPage(PAGE_FIRST);
				return ;
			}

			Logger::write('Permission granted.', 'ControllerWithPermission.renderView');

			$this->view->render($name, $renderOpt);
		}

	}

?>
