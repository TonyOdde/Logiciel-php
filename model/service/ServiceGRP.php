<?php

namespace model\service;

use model\DAO\MessDAOFromGRP;
use model\interfaces\IDAO;
use model\interfaces\IServiceDAO;

require_once 'model/interfaces/IServiceDAO.php';
class ServiceGRP implements IServiceDAO
{
    private IDAO $_dao;

    public function __construct(){
        require_once 'model/DAO/MessDAOFromGRP.php';
        $this->_dao = new MessDAOFromGRP();
    }

    public function getMessage(): string
    {
        return $this->_dao->getMessage();
    }


}