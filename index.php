<?php

use controller\MessController;
require_once 'controller/MessController.php';

$ctrl = new MessController();

if(!isset($_POST['submit'])){
    $ctrl->displayForm();
}
else{
    $ctrl->displayMessage($_POST['TypeDAO']);
}



