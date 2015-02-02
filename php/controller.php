<?php

// Create a new object of client api data
$clientApis = new apiSend;

$validate =  $clientApis->callProtected();

$clientApis->pr($validate);

foreach ($validate->clients as $key => $value) {
    echo $key;
}