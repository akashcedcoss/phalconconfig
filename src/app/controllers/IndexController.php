<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
        
        $this->view->users = Users::find();
        // return '<h1>Hello World!</h1>';
    }
    public function loginAction() {
        $user = new Users();

        //assign value from the form to $user
        $user->assign(
            $this->request->getPost(),
            [
                'username',
                'email',
                
                
            ]
        );
        // print_r($this->request->getPost());

        // Store and check for errors
        $success = $user->save();
    }
}