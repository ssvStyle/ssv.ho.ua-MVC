<?php

class Registration extends Controller{
    
    protected $addNewUser;
    
    function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }
    
    public function indexAction() {
        $this->view->render('registration/index');
    }
}
