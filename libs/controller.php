<?php

	/*
	Author: Sittinut CHIVAKUNAKORN
	Copyright (c) Heisenberg Web Design and Implement
	*/

	class Controller
	{

		private $view;

		function Controller()
		{
			Session::init();
			$this->view = new View();

			Logger::write('[Array] $_SESSION: '.var_export($_SESSION, true).'.', 'Controller.Controller');
		}

		protected function _setSessionGuest()
		{
			Session::set('user_no', SessionEnum::DEFAULT_USER_NO);
      Session::set('username', SessionEnum::DEFAULT_USERNAME);
      Session::set('isAdmin', SessionEnum::DEFAULT_IS_ADMIN);
		}

		protected function headToPage($page)
		{
			Logger::write('Head to: '.PATH_URL.$page.'.', 'Controller.headToPage');

			header('Location: '.PATH_URL.$page);
		}

		function renderView($name, $renderOpt)
		{
			if(!file_exists('views/'.$name.'.php'))
			{
				Logger::write('[File] views/'.$name.'.php not found.', 'Controller.renderView', logEnum::TYPE_ERR);

				$this->headToPage(PAGE_ERR_VIEW_NOT_FOUND);
				return ;
			}

			$this->view->render($name, $renderOpt);
		}

		function doLogout()
		{
			Logger::write('Function doLogout() is called.', 'Controller.doLogout');

			$this->_setSessionGuest();
			$this->headToPage(PAGE_FIRST);
		}

	}

?>
