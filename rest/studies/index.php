<?php

header("Content-type:text/plain; encoding=UTF8");

$noStudies = false;

sleep(5);

class Container {

}


///
// Array of studies.
//
$studies = array();


if (!$noStudies) {
	///
	// Add a study.
	//
	$study = new Container();
	$study->studyId 									= "Cephorin P-III";
	$study->studyName 									= "Cephorin in treatment of severe infection";
	$study->studyNumber 								= "CFRN 4563";
	$study->studySites = array();

	///
	// Add a site.
	//
	$site = new Container();
	$site->siteId										= "MA-1";
	$site->siteName										= "Massachusetts General";

	$site->siteAddress = new Container();
	$site->siteAddress->country							= "United States";
	$site->siteAddress->locality						= "San Francisco";
	$site->siteAddress->postalCode						= "94103";
	$site->siteAddress->territory						= "CA";
	$site->siteAddress->streetAddress = array();
	$site->siteAddress->streetAddress[] 				= "151 Third Street";
	$site->siteContactNo								= "408-555-1111";

	$site->siteAtGlanceMetrics = array();
	$metric = new Container();
	$metric->metricValue 								= "0062";
	$metric->metricName 								= "NUM_DAYS_SINCE_LAST_VISIT";
	$metric->metricFooter								= "DAYS SINCE LAST VISIT";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue 								= "0002";
	$metric->metricName 								= "COMPLETED_SITE_VISIT_CNT";
	$metric->metricFooter								= "COMPLETED SITE VISITS";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue 								= "3.31";
	$metric->metricName 								= "QRY_PER_100_ITEMS";
	$metric->metricFooter								= "QUERIES/100 ITEMS";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue 								= "1.33";
	$metric->metricName 								= "QRY_RESP_TIME";
	$metric->metricFooter								= "QUERY RESPONSE TIME";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue 								= "0324";
	$metric->metricName 								= "TO_VERIFY_CRFS_CNT";
	$metric->metricFooter								= "CRFs TO BE VERIFIED";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue 								= "0025";
	$metric->metricName 								= "AE_CNT";
	$metric->metricFooter								= "ADVERSE EVENTS";
	$site->siteAtGlanceMetrics[] = $metric;

	$site->siteTrendingGraphs = array();

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName						= "subjects/week";
	$siteTrendingGraph->graphHeader						= "ENROLLMENT";
	$siteTrendingGraph->graphFooter						= "subjects/wk";
	$siteTrendingGraph->graphWeeklyValues 				= array( 5, 10, 15, 20, 15, 10, 30, 35, 40, 45, 50, 45 );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName						= "discrepancies/week";
	$siteTrendingGraph->graphHeader						= "OPEN DISCR";
	$siteTrendingGraph->graphFooter						= "discrepancies/wk";
	$siteTrendingGraph->graphWeeklyValues 				= array ( 15, 5, 15, 7, 9, 20, 30, 5, 20, 15, 18, 15 );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName						= "records/week";
	$siteTrendingGraph->graphHeader						= "SV READY";
	$siteTrendingGraph->graphFooter						= "records/wk";
	$siteTrendingGraph->graphWeeklyValues 				= array ( 5, 10, 15, 20, 15, 10, 30, 35, 40, 45, 50, 45 );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$site->subSites = array();

	$subSite = new Container();
	$subSite->subSiteType = "Receiving";
	$subSite->subSiteCountry = "USA";
	$subSite->subSiteAddr = array(  "1399 Church Street"  );
	$subSite->subSiteLocality = "San Francisco";
	$subSite->subSiteTerritory = "CA";
	$subSite->subSitePostalCode = "94114";
	$site->subSites[] = $subSite;

	$subSite = new Container();
	$subSite->subSiteType = "Lab";
	$subSite->subSiteCountry = "USA";
	$subSite->subSiteAddr = array(  "451 Cortland Avenue"  );
	$subSite->subSiteLocality = "San Francisco";
	$subSite->subSiteTerritory = "CA";
	$subSite->subSitePostalCode = "94110";
	$site->subSites[] = $subSite;

	$subSite = new Container();
	$subSite->subSiteType = "Administration";
	$subSite->subSiteCountry = "USA";
	$subSite->subSiteAddr = array(  "616 Irving Street"  );
	$subSite->subSiteLocality = "San Francisco";
	$subSite->subSiteTerritory = "CA";
	$subSite->subSitePostalCode = "94122";
	$site->subSites[] = $subSite;

	$subSite = new Container();
	$subSite->subSiteType = "Cafeteria";
	$subSite->subSiteCountry = "USA";
	$subSite->subSiteAddr = array(  "501 Stanyan Street"  );
	$subSite->subSiteLocality = "San Francisco";
	$subSite->subSiteTerritory = "CA";
	$subSite->subSitePostalCode = "94117";
	$site->subSites[] = $subSite;

	$study->studySites[] = $site;

	///
	// Add a site.
	//
	$site = new Container();
	$site->siteId = "NJ-1";
	$site->siteName = "Lakehead General Hospital";
	$site->siteAddress = new Container();
	$site->siteAddress->country = "United States";
	$site->siteAddress->locality = "San Francisco";
	$site->siteAddress->postalCode = "94102-4509";
	$site->siteAddress->territory = "CA";
	$site->siteAddress->streetAddress = array(  "301 Van Ness Avenue"  );

	$site->siteContactNo = "203-555-1111";

	$site->siteAtGlanceMetrics = array();
	$metric = new Container();
	$metric->metricValue = "0045";
	$metric->metricName = "NUM_DAYS_SINCE_LAST_VISIT";
	$metric->metricFooter = "DAYS SINCE LAST VISIT";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "0008";
	$metric->metricName = "COMPLETED_SITE_VISIT_CNT";
	$metric->metricFooter = "COMPLETED SITE VISITS";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "1.38";
	$metric->metricName = "QRY_PER_100_ITEMS";
	$metric->metricFooter = "QUERIES/100 ITEMS";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "2.98";
	$metric->metricName = "QRY_RESP_TIME";
	$metric->metricFooter = "QUERY RESPONSE TIME";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "0201";
	$metric->metricName = "TO_VERIFY_CRFS_CNT";
	$metric->metricFooter = "CRFs TO BE VERIFIED";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "0012";
	$metric->metricName = "AE_CNT";
	$metric->metricFooter = "ADVERSE EVENTS";
	$site->siteAtGlanceMetrics[] = $metric;

	$site->siteTrendingGraphs = array();

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName = "subjects/week";
	$siteTrendingGraph->graphHeader = "ENROLLMENT";
	$siteTrendingGraph->graphFooter = "subjects/wk";
	$siteTrendingGraph->graphWeeklyValues = array(  5, 10, 15, 20, 15, 10, 30, 35, 40, 45, 50, 45  );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName = "discrepancies/week";
	$siteTrendingGraph->graphHeader = "OPEN DISCR";
	$siteTrendingGraph->graphFooter = "discrepancies/wk";
	$siteTrendingGraph->graphWeeklyValues = array(  15, 5, 15, 7, 9, 20, 30, 5, 20, 15, 18, 15  );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName = "records/week";
	$siteTrendingGraph->graphHeader = "SV READY";
	$siteTrendingGraph->graphFooter = "records/wk";
	$siteTrendingGraph->graphWeeklyValues = array(  5, 10, 15, 20, 15, 10, 30, 35, 40, 45, 50, 45  );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$site->subSites = array();

	$subSite = new Container();
	$subSite->subSiteType = "Lab";
	$subSite->subSiteCountry = "USA";
	$subSite->subSiteAddr = array(  "234 Market St."  );
	$subSite->subSiteLocality = "Lakewood";
	$subSite->subSiteTerritory = "NJ";
	$subSite->subSitePostalCode = "21511";
	$site->subSites[] = $subSite;

	$subSite = new Container();
	$subSite->subSiteType = "Administration";
	$subSite->subSiteCountry = "USA";
	$subSite->subSiteAddr = array(  "36710 "  );
	$subSite->subSiteLocality = "Cranford";
	$subSite->subSiteTerritory = "NJ";
	$subSite->subSitePostalCode = "21212";
	$site->subSites[] = $subSite;

	$study->studySites[] = $site;

	$studies[] = $study;

	///
	// Add a study.
	//
	$study = new Container();
	$study->studyId = "Anemia P-2";
	$study->studyName = "Treatment of aplastic anemia";
	$study->studyNumber = "AMXN 9374";
	$study->studySites = array();

	///
	// Add a site.
	//
	$site = new Container();
	$site->siteId = "MD-1";
	$site->siteName = "Baltimore General Hospital";

	$site->siteAddress = new Container();
	$site->siteAddress->country = "UnitedStates";
	$site->siteAddress->locality = "Baltimore";
	$site->siteAddress->postalCode = "17920";
	$site->siteAddress->territory = "MD";
	$site->siteAddress->streetAddress = array(  "103 Hospital Way"  );
	$site->siteContactNo = "999-555-4734";

	$site->siteAtGlanceMetrics = array();
	$metric = new Container();
	$metric->metricValue = "0029";
	$metric->metricName = "NUM_DAYS_SINCE_LAST_VISIT";
	$metric->metricFooter = "DAYS SINCE LAST VISIT";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "0003";
	$metric->metricName = "COMPLETED_SITE_VISIT_CNT";
	$metric->metricFooter = "COMPLETED SITE VISITS";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "1.92";
	$metric->metricName = "QRY_PER_100_ITEMS";
	$metric->metricFooter = "QUERIES/100 ITEMS";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "1.20";
	$metric->metricName = "QRY_RESP_TIME";
	$metric->metricFooter = "QUERY RESPONSE TIME";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "0450";
	$metric->metricName = "TO_VERIFY_CRFS_CNT";
	$metric->metricFooter = "CRFs TO BE VERIFIED";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "0033";
	$metric->metricName = "AE_CNT";
	$metric->metricFooter = "ADVERSE EVENTS";
	$site->siteAtGlanceMetrics[] = $metric;

	$site->siteTrendingGraphs = array();

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName = "subjects/week";
	$siteTrendingGraph->graphHeader = "ENROLLMENT";
	$siteTrendingGraph->graphFooter = "subjects/wk";
	$siteTrendingGraph->graphWeeklyValues = array(  2, 1, 3, 3, 4, 1, 3, 1, 1, 0, 1, 0  );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName = "discrepancies/week";
	$siteTrendingGraph->graphHeader = "OPEN DISCR";
	$siteTrendingGraph->graphFooter = "discrepancies/wk";
	$siteTrendingGraph->graphWeeklyValues = array(  15, 5, 15, 7, 9, 20, 30, 5, 20, 15, 18, 15  );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName = "records/week";
	$siteTrendingGraph->graphHeader = "SV READY";
	$siteTrendingGraph->graphFooter = "records/wk";
	$siteTrendingGraph->graphWeeklyValues = array(  5, 10, 15, 20, 15, 10, 30, 35, 40, 45, 50, 45  );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$site->subSites = array();

	$subSite = new Container();
	$subSite->subSiteType = "Lab";
	$subSite->subSiteCountry = "USA";
	$subSite->subSiteAddr = array(  "41256 Henry St."  );
	$subSite->subSiteLocality = "Baltimore";
	$subSite->subSiteTerritory = "MD";
	$subSite->subSitePostalCode = "31511";
	$site->subSites[] = $subSite;

	$subSite = new Container();
	$subSite->subSiteType = "Mailing";
	$subSite->subSiteCountry = "USA";
	$subSite->subSiteAddr = array(  "1561 Everton St."  );
	$subSite->subSiteLocality = "Brighton";
	$subSite->subSiteTerritory = "MD";
	$subSite->subSitePostalCode = "21512";
	$site->subSites[] = $subSite;

	$study->studySites[] = $site;

	///
	// Add a site.
	//
	$site = new Container();


	$site->siteId = "NJ-2";
	$site->siteName = "Geraldton General Hospital";


	$site->siteAddress = new Container();
	$site->siteAddress->country = "UnitedStates";
	$site->siteAddress->locality = "Basking Ridge";
	$site->siteAddress->postalCode = "07920";
	$site->siteAddress->territory = "NJ";
	$site->siteAddress->streetAddress = array(  "19234 Turing Way"  );
	$site->siteContactNo = "999-552-1111";

	$site->siteAtGlanceMetrics = array();
	$metric = new Container();
	$metric->metricValue = "0010";
	$metric->metricName = "NUM_DAYS_SINCE_LAST_VISIT";
	$metric->metricFooter = "DAYS SINCE LAST VISIT";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "0005";
	$metric->metricName = "COMPLETED_SITE_VISIT_CNT";
	$metric->metricFooter = "COMPLETED SITE VISITS";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "1.01";
	$metric->metricName = "QRY_PER_100_ITEMS";
	$metric->metricFooter = "QUERIES/100 ITEMS";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "3.21";
	$metric->metricName = "QRY_RESP_TIME";
	$metric->metricFooter = "QUERY RESPONSE TIME";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "0022";
	$metric->metricName = "TO_VERIFY_CRFS_CNT";
	$metric->metricFooter = "CRFs TO BE VERIFIED";
	$site->siteAtGlanceMetrics[] = $metric;

	$metric = new Container();
	$metric->metricValue = "0012";
	$metric->metricName = "AE_CNT";
	$metric->metricFooter = "ADVERSE EVENTS";
	$site->siteAtGlanceMetrics[] = $metric;




	$site->siteTrendingGraphs = array();

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName = "discrepancies/week";
	$siteTrendingGraph->graphHeader = "OpenDiscCount";
	$siteTrendingGraph->graphFooter = "OPEN DISCR";
	$siteTrendingGraph->graphWeeklyValues = array(  10, 20, 40, 35, 20  );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName = "subjects/week";
	$siteTrendingGraph->graphHeader = "PatEnrollment";
	$siteTrendingGraph->graphFooter = "ENROLLMENT";
	$siteTrendingGraph->graphWeeklyValues = array(  5, 10, 15, 25  );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$siteTrendingGraph = new Container();
	$siteTrendingGraph->graphName = "records/week";
	$siteTrendingGraph->graphHeader = "SV READY";
	$siteTrendingGraph->graphFooter = "records/wk";
	$siteTrendingGraph->graphWeeklyValues = array(  5, 10, 15, 20, 15, 10, 30, 35, 40, 45, 50, 45  );
	$site->siteTrendingGraphs[] = $siteTrendingGraph;

	$site->subSites = array();

	$subSite = new Container();
	$subSite->subSiteType = "Mailing";
	$subSite->subSiteCountry = "USA";
	$subSite->subSiteAddr = array(  "1561 Everton St."  );
	$subSite->subSiteLocality = "Brighton";
	$subSite->subSiteTerritory = "MD";
	$subSite->subSitePostalCode = "21512";
	$site->subSites[] = $subSite;

	$study->studySites[] = $site;

	$studies[] = $study;
}

///
// Build JSON.
//
$data = new Container();
$data->studies = $studies;

echo json_encode($data);

?>