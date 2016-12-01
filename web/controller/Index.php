<?php
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;

class Index{
    private $view;

    public function __construct() {
        $this->view = new View();
    }


    public function show() {
        return $this->view->make('show')->with('title','程序中给的标题吆，亲');
    }

    public function post(){
        p($_SESSION);
        return $this->view->make('post');
    }

    public function code(){
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build();
        $_SESSION['code'] = $builder->getPhrase();
        $builder->output();
    }



}
?>