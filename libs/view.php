<?php

	/*
	Author: Sittinut CHIVAKUNAKORN
	Copyright (c) Heisenberg Web Design and Implement
	*/

	class View {

		private $cssFiles;
		private $jsFiles;

		function View()
		{

		}

		function render($name, $renderOpt)
		{
			if($renderOpt == optionEnum::RENDER_HEADER_ONLY){
				require 'views/header.php';
				require 'views/'.$name.'.php';
			} else if($renderOpt == optionEnum::RENDER_FOOTER_ONLY){
				require 'views/'.$name.'.php';
				require 'views/footer.php';
			} else if($renderOpt == optionEnum::RENDER_NEITHER){
				require 'views/'.$name.'.php';
			} else {
				require 'views/header.php';
				require 'views/'.$name.'.php';
				require 'views/footer.php';
			}
		}

	}

?>
