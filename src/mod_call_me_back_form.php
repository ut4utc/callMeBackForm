<?php 
	/*
	# ------------------------------------------------------------------------
	# Extensions for Joomla 3.x
	# ------------------------------------------------------------------------
	# Copyright (C) 2017 proinsurer.com.ua All Rights Reserved.
	# @license - PHP files are GNU/GPL V2.
	# Author: standardcompany.ru
	# Modified: ut4utc@gmail.com Alex
	# Website:  https://proinsurer.com.ua
	# Date modified: 23/10/2017
	# ------------------------------------------------------------------------
	*/

	defined('_JEXEC') or die;
	$document = JFactory::getDocument();
	$layout = $params->get('layout', 'default');
	require JModuleHelper::getLayoutPath('mod_call_me_back_form', '$layout');

?>