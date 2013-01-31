<?php
/**
 * mobilecraservices/rest/sitesatglance?studyId=%@&siteIdList=%@
 * mobilecraservices/rest/sitesatglance?studyId=%@&siteSearchCriteria=%@
 */ 

define ("LOG_FILE", "/var/tmp/Klendathu.log");

if (array_key_exists("siteIdList", $_GET)) {
	$siteIdList = explode(",", $_GET["siteIdList"]);
	
	echo "{\"sites\":[";
	$siteJson = "";
	foreach ($siteIdList as $siteId) {
		if (strlen($siteJson) > 0) $siteJson .= ",";
		$filename = "../sites/" . $siteId . ".php";
		$siteJson .= file_get_contents($filename);
	} // for
	echo $siteJson;
	echo "]}";
}

if (array_key_exists("siteSearchCriteria", $_GET)) {
	$siteSearchCriteria = $_GET["siteSearchCriteria"];
	
	echo "{\"sites\":[";
	$siteJson = "";
	$filename = "../sites/sitedId-1.1.php";
	$siteJson .= file_get_contents($filename);
	echo $siteJson;
	echo "]}";
}

?>
