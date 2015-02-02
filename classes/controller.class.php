<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class apiControl
{
    public function getConfig() {
        $data = file_get_contents('data/config.json');
        return json_decode($data);
    }
    
    public function __get_api_data() {
        echo "Using the toString method: ";
        return $this->getConfig();
    }
    
    public function getClient($client) {
        $clientDataFull = $this->getConfig();
        $clientData = $clientDataFull->clients->$client;
        return $clientData;
    }
    
    public function getClientList() {
        $clientDataFull = $this->getConfig();
        $clientData = $clientDataFull->clients;
        return $clientData;
    }
}

class apiSend extends apiControl {
    public function pr($data) {
        print "<pre>";
        print_r($data);
        print "</pre>";
    }

    public function callProtectedAll()
    {
        return $this->getConfig();
    }
    public function callProtectedListClients() {
        foreach ( $this->getClientList() as $key => $value) {
            $data[] = $key;
        }
        return $data;
    }
    
}

?>