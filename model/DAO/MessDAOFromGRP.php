<?php

namespace model\DAO;

use model\interfaces\IDAO;

require_once 'model/interfaces/IDAO.php';
class MessDAOFromGRP implements IDAO
{
    private string $_url;

    public function __construct(){
        $this->_url = "https://grp-596.iq.iut21.u-bourgogne.fr/vscode/Logiciel-php/script.php";
    }

    public function getMessage(): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->_url);


        // Set the request method to GET
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

        // Set an option to return the response as a string instead of outputting it directly
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Set an option to accept self-signed certificates
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        // Execute the request and store the response in a variable
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        // Close the cURL session
        curl_close($ch);
        return $response;
    }
}