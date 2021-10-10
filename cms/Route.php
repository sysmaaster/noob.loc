<?php
/**
 * List routes
 */

	$this->router->add('index', '/', 'HomeController:index');
	$this->router->add('home', '/home/', 'HomeController:home');
	
// Login Routes (GET)
	$this->router->add('auth', '/login/', 'LoginController:form');
	$this->router->add('logout', '/components/logout/', 'CmsController:logout');

// Login Routes (POST)
	$this->router->add('login', '/components/auth/', 'LoginController:authUser', 'POST');
	
	
// Registration Routes (POST)
	$this->router->add('register', '/components/register/', 'LoginController:regUser', 'POST');
sfsd











