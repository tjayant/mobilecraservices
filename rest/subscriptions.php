<?php

sleep(1);

$method = $_SERVER['REQUEST_METHOD'];

header('HTTP/1.1 200 OK');
header('Status: 200 OK!');
header("Content-type:application/json; encoding=UTF8");

include "subscriptionJSON.js";

?>
