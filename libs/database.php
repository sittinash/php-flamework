<?php

	/*
	Author: Sittinut CHIVAKUNAKORN
	Copyright (c) Heisenberg Web Design and Implement
	*/

	class Database extends PDO
	{

		function Database()
		{
				logger::write('Connect to Database: '.DB_NAME.'.', 'Database.Database');

				parent::__construct(
					DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME
					, DB_USER
					, DB_PSSW);
				parent::exec("set names utf8");
		}

	}

?>
