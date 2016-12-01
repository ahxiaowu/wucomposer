<?php
namespace web\controller;
use core\View;

class Index{
    private $view;

    public function __construct() {
        $this->view = new View();
    }


    public function show() {
        return $this->view->make('show')->with('title','程序中给的标题吆，亲');
    }

    public function post(){
        echo 'post';
    }
}
?>