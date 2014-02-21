<?php

	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

	Router::connect('/eventos', array('controller' => 'pages', 'action' => 'display', 'eventos'));
	
	Router::connect('/sobre', array('controller' => 'pages', 'action' => 'display' , 'sobre'));
	
	Router::connect('/contato', array('controller' => 'pages', 'action' => 'display' , 'contato'));


	CakePlugin::routes();


	require CAKE . 'Config' . DS . 'routes.php';
