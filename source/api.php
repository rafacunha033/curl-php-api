<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/users');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 'https://jsonplaceholder.typicode.com/users');


$decoded =  json_decode(curl_exec($curl));
curl_close($curl);

var_dump($decoded);



class ApiRest 
{

    private $url;
    


    public function __construct()
    {
        
    }

    public function getRequest()
    {

    }

    public function sendRequest()
    {
        $this->enpoint
    }
}