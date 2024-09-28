<?php

namespace model\service;

use model\DAO\MessDAOFromJSON;
use model\interfaces\IDAO;
use model\interfaces\IServiceDAO;

require_once 'model/interfaces/IServiceDAO.php';
class ServiceJSON implements IServiceDAO
{
    private IDAO $_dao;


    public function __construct(){
        require_once 'model/DAO/MessDAOFromJSON.php';
        $this->_dao = new MessDAOFromJSON();
    }
    public function getMessage(): string
    {
        return $this->_dao->getMessage();
    }
}