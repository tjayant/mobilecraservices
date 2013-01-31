<?php

header("Content-type:text/plain; encoding=UTF8");

class Container {

}

$payload = new Container();

$payload->aps = new Container();
$payload->aps->alert            	= "A mock alert message";
$payload->aps->badge				= 0;

echo json_encode($payload);

?>