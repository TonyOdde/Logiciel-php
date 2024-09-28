<?php

namespace model\DAO;

use model\interfaces\IDAO;

require_once 'model/interfaces/IDAO.php';
class MessDAOFromJSON implements IDAO
{

    public function getMessage(): string
    {
        $json = json_decode(file_get_contents('data/message.json'));
        return $json->message;
    }
}