<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class apiControl
{
    public function get_api_data() {
        $data = file_get_contents('data/config.json');
        return json_decode($data);
    }
}

?>