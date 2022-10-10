<?php

namespace controllers;

use core\AbstractionController;
use core\View;

class Index extends AbstractionController
{
    protected $view;
    public function __construct(){
        $this->view=new View('admin');
    }

    public function index(){
        $this->view->render('index_index');
    }
}