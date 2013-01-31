<?php

define("UID", "566963746f72"); /* "Victor" */
define("PWD", "56"); /* "V" */

$kIgnoreUsername = true;
$kIgnorePassword = true;
define ("LOG_FILE", "/var/tmp/Klendathu.log");

error_log("<POST---\n", 3, LOG_FILE);
foreach ($_POST as $name => $value) {
	error_log($name . " = " . $value . "\n", 3, LOG_FILE);
} // for
error_log(">POST---\n", 3, LOG_FILE);

error_log("method = " . $_SERVER['REQUEST_METHOD'] . "\n", 3, LOG_FILE);

error_log("<HEADERS---\n", 3, LOG_FILE);
$headers = getallheaders();
error_log("headers = " . count($headers) . "\n", 3, LOG_FILE);
foreach ($headers as $name => $value) {
	error_log($name . " = " . $value . "\n", 3, LOG_FILE);
}
error_log(">HEADERS---\n", 3, LOG_FILE);

$username = $_POST["Username"];
error_log("username = " . $username . "\n", 3, LOG_FILE);
$usernameMatch = $kIgnoreUsername || (strcasecmp($username, constant("UID")) == 0);

$password = $_POST["Password"];
error_log("password = " . $password . "\n", 3, LOG_FILE);
$passwordMatch = $kIgnorePassword || (strcasecmp($password, constant("PWD")) == 0);

if ($usernameMatch && $passwordMatch)
{
	$inTwoMonths = 60 * 60 * 24 * 60 + time();
	setcookie('mcrasession', 'DEADBEEF', $inTwoMonths);
	header('x-oracle-hsgbu-cda:true');
}
else
{
	header('HTTP/1.1 403 Forbidden');
	header('Status: 403 Forbidden!');
	header("Content-type:text/plain; encoding=UTF8");
}

?>
