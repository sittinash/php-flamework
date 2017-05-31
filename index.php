<?php

	/*
	Author: Sittinut CHIVAKUNAKORN
	Copyright (c) Heisenberg Web Design and Implement
	*/

	require 'config/database-conf.php';
	require 'config/date_and_time-conf.php';
	require 'config/logs-conf.php';
	require 'config/pages-conf.php';
	require 'config/paths-conf.php';

	require 'enum/log-enum.php';
	require 'enum/option-enum.php';
	require 'enum/session-enum.php';

	require 'libs/singleton.php';
	require 'libs/bootstrap.php';
	require 'libs/controller.php';
	require 'libs/controllerWithPermission.php';
	require 'libs/database.php';
	require 'libs/encoder.php';
	require 'libs/ip.php';
	require 'libs/logger.php';
	require 'libs/model.php';
	require 'libs/script.php';
	require 'libs/session.php';
	require 'libs/view.php';

  $site = new Bootstrap();

?>
