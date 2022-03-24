<?php

use Phalcon\Mvc\Controller;


class TestController extends Controller
{
    public function checkConfigAction()
    {
        $this->view->data =  $this->config->app->name;
        // $this->view->users = Users::find();
        // // return '<h1>Hello World!</h1>';
    }
}