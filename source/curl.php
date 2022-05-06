<?php

namespace Api;

class Api 
{
    public $url;
    public $curl;
    public $endpoint;

    public function __construct(string $url, string $endpoint)
    {
        $this->url = $url;
        $this->endpoint = $endpoint;

        $this->init();
    }

    public function init()
    {
        $this->curl = curl_init();

        return $this;
    }

    public function get()
    {
        $url = $this->url . $this->endpoint;
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_HTTPGET, true);
        
        return json_decode(curl_exec($this->curl));
    }


    public function post($data = [])
    {        
        $url = $this->url . $this->endpoint;
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_POST, true);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);

        return curl_exec($this->curl);
    }

    public function put() 
    {

    }

    public function patch()
    {
        
    }

    public function delete()
    {

    }

    public function close()
    {
        curl_close($this->curl);

        return $this;
    }
}

