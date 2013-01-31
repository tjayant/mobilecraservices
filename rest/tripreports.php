<?php
sleep(1);

$dbgFailFetch = false;
$dbgFailCreate = false;
$dbgInvalidFetch = false;

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "GET") {
	if ($dbgFailFetch) {
		header('HTTP/1.1 500 Internal Server Error');
		header('Status: 500 Internal Server Error!');
		header("Content-type:application/json; encoding=UTF8");
	} else {
		header('HTTP/1.1 200 OK');
		header('Status: 200 OK!');
		header("Content-type:application/json; encoding=UTF8");

		if ($dbgInvalidFetch) {
			include "invalid_tripreport.js";
		} else {
			include "tripreport.js";
		}
	}
} else {
	if ($dbgFailCreate) {
		header('HTTP/1.1 500 Internal Server Error');
		header('Status: 500 Internal Server Error!');
		header("Content-type:application/json; encoding=UTF8");
	} else {
		header('HTTP/1.1 201 Created');
		header('Status: 201 Created!');
		header("Content-type:application/json; encoding=UTF8");

		$tripReportId = "17";
		$location = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . "/" . $tripReportId;
		header("Location: " . $location);
	}
}
?>
