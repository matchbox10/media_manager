<?php

// Create a new object of client api data
$clientApis = new apiSend;

$validate =  $clientApis->callProtectedListClients();

$clientApis->pr($validate);

foreach ($validate as $key => $value) {
    echo $key;
}