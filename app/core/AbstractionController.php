<?php

namespace core;

abstract class AbstractionController implements controllerInterface
{
    protected $view;
    public function __construct(){
        $this->view=new View();
    }
}