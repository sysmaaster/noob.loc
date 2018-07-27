<?php

namespace Cms\Controller;

use Engine\Controller;
use Engine\Core\Auth\Auth;

class CmsController extends Controller
{
    /**
     * CmsController constructor.
     * @param \Engine\DI\DI $di
     */
	/**
	 * AdminController constructor.
	 * @param \Engine\DI\DI $di
	 */
	public function __construct($di)
	{
		parent::__construct($di);
		
		$this->auth = new Auth();
		
	}
	
	public function logout()
	{
		$this->auth->unAuthorize();
		header('Location: /login/');
		exit;
	}
}