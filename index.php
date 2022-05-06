<?php

require __DIR__."/vendor/autoload.php";

require 'source/curl.php';

use Api\Api;

$curl = new Api("https://reqres.in/api/", "users");

$postUser = $curl->post([
    "name" => "morpheus",
    "job" => "leader"
]);

$getUsers = $curl->get();

var_dump($postUser);
echo "<hr>";
var_dump($getUsers);

$curl->close();
