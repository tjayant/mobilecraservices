<?php
define ("LOG_FILE", "/var/tmp/Klendathu.log");

error_log("-----\n", 3, LOG_FILE);
foreach ($_GET as $name => $value) {
	error_log($name . " = " . $value . "\n", 3, LOG_FILE);
} // for

$studyId = $_GET["studyId"]; 

if ($studyId == "AMXN 9374") {
	$studyId = "studyId-2";
}

if ($studyId) {
	$studyId = $studyId;
	if (!include "../studies/" . $studyId . ".php") {
		header('HTTP/1.1 404 Forbidden');
		header('Status: 404 Forbidden!');
		header("Content-type:text/plain; encoding=UTF8");
		echo "You fail.";
	}
} else {
}
?>