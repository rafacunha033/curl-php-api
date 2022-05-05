<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/users');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 'https://jsonplaceholder.typicode.com/users');

// Decode from json to php
$decoded =  json_decode(curl_exec($curl));
curl_close($curl);

echo "<pre>";
var_dump($decoded);
echo "</pre>";





$url = "https://reqres.in/api/users";

$data_array = array(
    "name" => "morpheus",
    "job" => "leader"
);

$data = http_build_query($data_array);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($response);

    foreach($decoded as $key => $value) {
        echo $key. ' : '. $value. '<br>';
    }
}

curl_close($ch);


//     public function __construct()
//     {
        
//     }

//     public function getRequest()
//     {

//     }

//     public function sendRequest()
//     {
//         $this->enpoint
//     }
// }