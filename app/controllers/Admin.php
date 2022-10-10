<?php

namespace controllers;

use core\AbstractionController;
use core\View;
use models\ArticleModel;


class Admin extends AbstractionController
{
    protected $view;
    public function __construct(){
        $this->view=new View('admin');
    }
    public function index(){
        $model = new ArticleModel();
        $res = $model->add([
            'title' => 'test',
            'text' => 'test text'
        ]);
        var_dump($res);
        //$this->view->render('admin_index');
    }
}