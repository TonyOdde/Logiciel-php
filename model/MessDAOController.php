<?php

namespace model;

class MessDAOController
{
    private Service $_service;

    public function __construct(){
        require_once 'model/Service.php';
        $this->_service = new Service();
    }
    public function getMessage() : string
    {
        return $this->_service->getMessage();
    }
}