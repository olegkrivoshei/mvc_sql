<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller {

    public function indexAction() {
        $result = $this->model->getAll();
        $vars = [
            'news' => $result,
        ];
        $this->view->render('Главная страница', $vars);
    }

    public function dropAction() {
        $result = $this->model->dropUser(substr(strrchr($_SERVER['REQUEST_URI'], "/"), 1));
        $this->view->redirect('/admin');
    }
    public function index_addAction() {
        $result = $this->model->getCountry();

        $vars = [
            'news' => $result,
        ];

          $this->view->render('Adding user',$vars);
    }
    public function index_add_userAction() {
        $result =  $this->model->addUser($_POST);
        $this->view->redirect('/admin');
    }
    public function index_editAction() {
        $var = substr(strrchr($_SERVER['REQUEST_URI'], "/"), 1);
        $result =  $this->model->getUser($var);
        $results = $this->model->getCountry();
        $vars = [
            'news' => $result,
            'country' => $results
        ];

        $this->view->render('Editing user', $vars);
    }

    public function index_edit_userAction() {
        $result =  $this->model->editUser($_POST);
        $this->view->redirect('/admin');
    }

}