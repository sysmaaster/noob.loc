<?php

namespace Cms\Controller;

class HomeController extends CmsController
{
    public function index()
    {
        $this->view->render('index');
    }

}