<?php

namespace Admin\Controller;

class DashboardController extends AdminController
{
    public function index()
    {
	    print_r($_SESSION);
        // Load models
        $this->load->model('User');

        // Load language
        $this->load->language('dashboard/main');

        // Render this template
        $this->view->render('dashboard');
    }
}