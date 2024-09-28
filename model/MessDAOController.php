<?php

namespace model;

use Exception;
use model\interfaces\IServiceDAO;
use model\service\ServiceGRP;
use model\service\ServiceJSON;

class MessDAOController
{
    private ?IServiceDAO $_service;
    private Message $_message;

    public function __construct(){
        $this->_service = null;
        require_once 'model/Message.php';
        $this->_message = new Message();
    }

    /**
     * @throws Exception
     */
    public function getMessage($typeDAO) : string
    {
        switch ($typeDAO) {
            case 'GRP' :
                require_once 'model/service/ServiceGRP.php';
                $this->setService(new ServiceGRP());
                break;
            case 'JSON' :
                require_once 'model/service/ServiceJSON.php';
                $this->setService(new ServiceJSON());
                break;
            default:
                throw new Exception("Aucun type DAO entré", 1);
        }
        $this->_message->setMessage($this->_service->getMessage());
        return $this->_message->getMessage();
    }

    public function setService(IServiceDAO $service): void
    {
        $this->_service = $service;
    }
}