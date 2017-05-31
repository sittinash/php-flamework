<?php

	/*
	Author: Sittinut CHIVAKUNAKORN
	Copyright (c) Heisenberg Web Design and Implement
	*/

	class Bootstrap
	{

		function Bootstrap()
		{
			$ip = IP::getIP();
			$url = isset($_SERVER['REQUEST_URI'])? $_SERVER['REQUEST_URI'] : null;
			Logger::write('Connection requested upon '.$_SERVER['REQUEST_URI'].' from '.$ip.'.', 'Bootstrap.Bootstrap');

			$url = explode('/', rtrim($url, '/'));
			Logger::write('[Array] $url: '.var_export($url, true).'.', 'Bootstrap.Bootstrap');

			$isValid = (count($url) < 6);
			if(!$isValid)
			{
				Logger::write('Invalid element count ('.count($url).'/5).', 'Bootstrap.Bootstrap', logEnum::TYPE_ERR);
				$this->_loadController(PAGE_ERR_INVALID_ELEM_COUNT, $url);

				return false;
			}
			Logger::write('Valid element count ('.count($url).'/5).', 'Bootstrap.Bootstrap');

			if(empty($url[2]))
			{
				Logger::write('[String] $url[2] is empty.', 'Bootstrap.Bootstrap');
				$this->_loadController(PAGE_FIRST, $url);

				return true;
			}

		  if (!file_exists('controllers/'.$url[2].'-controller.php'))
			{
		   	Logger::write('[File] controllers/'.$url[2].'-controller.php not found.', 'Bootstrap.Bootstrap', logEnum::TYPE_ERR);
				$this->_loadController(PAGE_ERR_CTRLR_NOT_FOUND, $url);

				return false;
			}

			$ctrlr = $this->_loadController($url[2], $url);

			return true;
		}

		private function _loadController($name, $url)
		{
			Logger::write('Load Controller '.$name.'-controller.php.', 'Bootstrap._loadController');

			require 'controllers/'.$name.'-controller.php';
			$ctrlr = new $name();

			$isValidFunc = isset($url[3]) && method_exists($url[2], $url[3]);
			if($isValidFunc)
			{
				if(isset($url[4]))
				{
					Logger::write('Call Function '.$url[2].'.'.$url[3].'('.$url[4].').', 'Bootstrap._loadController');
		  		$ctrlr->$url[3]($url[4]);
		  	} else {
					Logger::write('Call Function '.$url[2].'.'.$url[3].'().', 'Bootstrap._loadController');
	    		$ctrlr->$url[3]();
				}

				return $ctrlr;
		  }

			$renderOpt = $this->_genRenderOption($name);
			Logger::write('Render View '.$name.'.php with Render Option: '.$renderOpt.'.', 'Bootstrap._loadController');
			$ctrlr->renderView($name, $renderOpt);

		  return $ctrlr;
		}

		private function _genRenderOption($name)
		{
			if($name == PAGE_FIRST
				|| substr($name, 0, 3) == 'err'
				)
			{
				$renderOpt = optionEnum::RENDER_NEITHER;
			} else {
				$renderOpt = optionEnum::RENDER_BOTH;
			}

			return $renderOpt;
		}

	}

?>
