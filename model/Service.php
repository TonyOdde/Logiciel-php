<?php

namespace model;

class Service
{
    private IDAO $_dao;

    public function __construct(){
        require_once 'model/MessDAO.php';
        $this->_dao = new MessDAO();
    }

    public function getMessage(): string
    {
        return $this->_dao->getMessage();
    }


}