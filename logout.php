<?php

define ("LOG_FILE", "/var/tmp/logout.log");

$kSimulatedFailure = false;

error_log("-COOKIES---\n", 3, LOG_FILE);
foreach ($_COOKIE as $name => $value) {
	error_log($name . " = " . $value . "\n", 3, LOG_FILE);
} // for

if ($kSimulatedFailure) {
	header('HTTP/1.1 500');
	header('Status: 500!');
	header("Content-type:text/plain; encoding=UTF8");
} else {
}
?>
