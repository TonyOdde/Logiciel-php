<?php

use controller\MessController;
require_once 'controller/MessController.php';
$ctrl = new MessController();
$ctrl->displayForm();


if(isset($_POST['submit'])){
    $ctrl->displayMessage();
}


