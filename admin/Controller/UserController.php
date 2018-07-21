<?php

namespace Admin\Controller;

class UserController extends AdminController
{
    public function listing()
    {
        $this->load->model('User');

        $this->data['users'] = $this->model->user->getUsers();
        $this->view->render('user/list', $this->data);
    }

    public function create()
    {
        $this->view->render('user/create');
    }

    public function edit($id)
    {
        $this->load->model('User');

        $this->data['users'] = $this->model->user->getUserData($id);

        $this->view->render('user/edit', $this->data);
    }

    public function add()
    {
        $this->load->model('Page');

        $params = $this->request->post;

        if (isset($params['title'])) {
            $pageId = $this->model->page->createPage($params);
            echo $pageId;
        }
    }

    public function update()
    {
        $this->load->model('User');

        $params = $this->request->post;

        if (isset($params['user_id'])) {
            $postId = $this->model->user->updateUser($params);
            echo $postId;
        }
    }
}