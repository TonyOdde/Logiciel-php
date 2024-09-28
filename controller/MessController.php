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
        $this->_message = '';
    }

    public function displayMessage($typeDAO){
        if(isset($_POST['submit'])){
            try {
                $this->_message = $this->_model->getMessage($typeDAO);
            }
            catch (\Exception $e){
                $this->_message = $e->getMessage();
            } finally {
                $this->_view->displayMessage($this->_message);
            }
        }
    }

    public function displayForm(){
        $this->_view->displayForm();
    }
}
