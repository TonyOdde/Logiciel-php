<?php

namespace controller;

use model\MessDAOController;
use views\MessView;

class MessController{

    private MessView $_view;
    private MessDAOController $_model;

    private string $_message;

    public function __construct(){
        require_once 'views/MessView.php';
        require_once 'model/MessDAOController.php';
        $this->_view = new MessView();
        $this->_model = new MessDAOController();
        $this->_message = ' ';
    }

    public function displayMessage(){
        if(isset($_POST['submit'])){
            $this->_message = $this->_model->getMessage();
            $this->_view->displayMessage($this->_message);
        }
    }

    public function displayForm(){
        $this->_view->displayForm();
    }
}
