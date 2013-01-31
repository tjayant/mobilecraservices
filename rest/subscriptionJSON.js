{
	"ruleSubscriptions" : [
			{
				"ruleId" : "10",
				"ruleName" : "Number of CRFs Waiting for Verification, Manual",
				"objectNameSpace" : "Study-Site",
				"notificationTemplateShort" : "Number of CRFs Waiting for Verification, Manual",
				"notificationTemplate" : "Number of CRFs ready for source verification is > $THRESH_NUM1$",
				"ruleParam" : [ {
					"defaultValue" : "10",
					"dataType" : "number",
					"paramName" : "CRF_UNVERIFIED",
					"paramId" : "11",
					"dataFormat" : null,
					"paramDescription" : "CRFs to be verified",
					"paramPrompt" : "CRFs to be Verified"
				} ],
				"ruleFunction" : "/shared/mobile cra/Number of CRFs Waiting for Verification, Manual"
			},
			{
				"ruleId" : "861",
				"ruleName" : "Number of CRFs waiting for Verification",
				"objectNameSpace" : "Study-Site",
				"notificationTemplate" : "Number of CRF page ready for source verification at the $Site_Name$ > $THRESH_NUM1$",
				"ruleParam" : [ {
					"defaultValue" : "5",
					"dataType" : "number",
					"paramName" : "CRF_UNVERIFIED",
					"paramId" : "643",
					"dataFormat" : null,
					"paramDescription" : "CRFs to be verified",
					"paramPrompt" : "CRFs to be Verified"
				} ],
				"ruleDescription" : "Description around the alert rule being created ",
				"ruleFunction" : "/shared/Mobile CRA/Number of CRFs waiting for Verification, Auto "
			},
			{
				"ruleId" : "7",
				"ruleName" : "Count of Enrolled Patient is a Multiple of Five, No Reset",
				"objectNameSpace" : "Study-Site",
				"notificationTemplateShort" : "Count of Enrolled Patient is a Multiple of Five, No Reset",
				"notificationTemplate" : "The number of patient enrolled at $Site_Name$ is equal to $#_Enrolled$",
				"ruleParam" : [],
				"ruleFunction" : "/shared/mobile cra/Count of Enrolled Patient is a Multiple of Five, No Reset"
			},
			{
				"ruleId" : "1",
				"ruleName" : "Number of Enrolled Patients is Greater Than Threshold, Auto",
				"objectNameSpace" : "Study-Site",
				"notificationTemplateShort" : "No of enrolled Patient is higher then $enrolled_count$",
				"notificationTemplate" : "Number of enrolled patients at $Site_Name$ is greater than $THRESH_NUM1$",
				"ruleParam" : [ {
					"defaultValue" : "3",
					"dataType" : "number",
					"paramName" : "ENROLLED_PATIENT",
					"paramId" : "1",
					"dataFormat" : null,
					"paramDescription" : "No of Enrolled Patient",
					"paramPrompt" : "No of Enrolled Patient"
				} ],
				"ruleFunction" : "/shared/mobile cra/Number of Enrolled Patients is Greater Than Threshold, Auto"
			},
			{
				"ruleId" : "2",
				"ruleName" : "First Patient has Enrolled at Site, No Reset",
				"objectNameSpace" : "Study-Site",
				"notificationTemplateShort" : "First Patient has Enrolled at Site, No Reset",
				"notificationTemplate" : "The first patient has been enrolled at site $Site_Name$",
				"ruleParam" : [ {
					"defaultValue" : "1",
					"dataType" : "text",
					"paramName" : "UNUSED_PARM",
					"paramId" : "6",
					"dataFormat" : null,
					"paramDescription" : "UNUSED PARAMS",
					"paramPrompt" : " "
				} ],
				"ruleFunction" : "/shared/mobile cra/First Patient has Enrolled at Site, No Reset"
			},
			{
				"ruleId" : "4",
				"ruleName" : "Number of Enrolled Patients since Last Site Visit, Manual",
				"objectNameSpace" : "Study-Site",
				"notificationTemplateShort" : "Number of Enrolled Patients since Last Site Visit, Manual",
				"notificationTemplate" : "Count of enrolled patients since last site visit > $THRESH_NUM1$",
				"ruleParam" : [ {
					"defaultValue" : "3",
					"dataType" : "number",
					"paramName" : "ENROLLED_SINCE_LAST_VISIT",
					"paramId" : "3",
					"dataFormat" : null,
					"paramDescription" : "No fo patients enrolled since last site visit",
					"paramPrompt" : "Patients Enrolled Since Last Visit"
				} ],
				"ruleFunction" : "/shared/mobile cra/Number of Enrolled Patients since Last Site Visit, Manual"
			},
			{
				"ruleId" : "5",
				"ruleName" : "Number of screen failures, Auto",
				"objectNameSpace" : "Study-Site",
				"notificationTemplateShort" : "Number of screen failures, Auto",
				"notificationTemplate" : "Screen failures is greater is greater than $THRESH_NUM1$",
				"ruleParam" : [ {
					"defaultValue" : "17-MAR-2012",
					"dataType" : "date",
					"paramName" : "SCREENING_DATE",
					"paramId" : "4",
					"dataFormat" : "dd-MMM-yyyy",
					"paramDescription" : "Screening date",
					"paramPrompt" : "Screening Date"
				}, {
					"defaultValue" : "10",
					"dataType" : "number",
					"paramName" : "SCREEN_FAILURE_COUNT",
					"paramId" : "5",
					"dataFormat" : null,
					"paramDescription" : "Screen failure count",
					"paramPrompt" : "Screen failure count"
				} ],
				"ruleFunction" : "/shared/mobile cra/Number of screen failures, Auto"
			} ]
}
