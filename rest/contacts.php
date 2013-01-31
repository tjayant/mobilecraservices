<?php

sleep(1);

header("Content-type:text/plain; encoding=UTF8");

$siteId = $_GET['siteId'];

class Container {
	
}


///
// Array of contacts.
//
$contacts = array();


//===========================================================
// Study: CFRN
// Site:  Mass Gen
//===========================================================
if ($siteId == "MA-1") {
	$contact = new Container();
	$contact->contactId            =   "contact-id-1";
	$contact->role                 =   "Principal Investigator";
	$contact->firstName            =   "Daniel";
	$contact->middleName           =   "Ryan";
	$contact->lastName             =   "Peach";
	$contact->emailAddress         =   "dan.peach@massgen.edu";
	$contact->notes                =   "Some notes.";
	$contact->faxPhone             =   "999-555-4734";
	$contact->workPhone            =   "999-555-1916";
	$contact->streetAddress        =   "13 Blossom St";
	$contact->city                 =   "Boston";
	$contact->state                =   "MA";
	$contact->country              =   "USA";
	$contact->postalCode           =   "00001";
	$contact->primarySpeciality    = "Medical";
	$contacts[] = $contact;
	
	//=======================================================
	
	$contact = new Container();
	$contact->contactId            =   "contact-id-2";
	$contact->role                 =   "Clinical Research Coordinator";
	$contact->firstName            =   "Jerri";
	$contact->middleName           =   "A";
	$contact->lastName             =   "Carter";
	$contact->emailAddress         =   "jerri.carter@massgen.edu.com";
	$contact->notes                =   "Some notes.";
	$contact->faxPhone             =   "999-555-4731";
	$contact->workPhone            =   "999-555-1912";
	$contact->streetAddress        =   "13 Blossom St";
	$contact->city                 =   "Boston";
	$contact->state                =   "MA";
	$contact->country              =   "USA";
	$contact->postalCode           =   "00001";
	$contact->primarySpeciality    = "CLinical Data";
	$contacts[] = $contact;
	
	//========================================================
	
	$contact = new Container();
	$contact->contactId            =   "contact-id-3";
	$contact->role                 =   "Secondary Investigator";
	$contact->firstName            =   "Paula";
	$contact->middleName           =   "R";
	$contact->lastName             =   "Terry";
	$contact->emailAddress         =   "paula.terryy@oracle.com";
	$contact->notes                =   "Some notes.";
	$contact->faxPhone             =   "999-555-4732";
	$contact->workPhone            =   "999-555-1913";
	$contact->streetAddress        =   "13 Blossom St";
	$contact->city                 =   "Boston";
	$contact->state                =   "MA";
	$contact->country              =   "USA";
	$contact->postalCode           =   "00001";
	$contact->primarySpeciality    = "Medical";
	$contacts[] = $contact;
}

//===========================================================
// Study: CFRN
// Site:  Lakehead Gen Hosp
//===========================================================

if ($siteId == "NJ-1") {
	$contact = new Container();
	$contact->contactId            =   "contact-id-4";
	$contact->role                 =   "Principal Investigator";
	$contact->firstName            =   "Rebecca";
	$contact->middleName           =   "R";
	$contact->lastName             =   "Chan";
	$contact->emailAddress         =   "rebecca.chan@LGHosp.com";
	$contact->notes                =   "Some notes.";
	$contact->faxPhone             =   "998-555-4734";
	$contact->workPhone            =   "998-555-1916";
	$contact->streetAddress        =   "13 Apple St";
	$contact->city                 =   "Newark";
	$contact->state                =   "NJ";
	$contact->country              =   "USA";
	$contact->postalCode           =   "12121";
	$contact->primarySpeciality    = "Medical";
	$contacts[] = $contact;
	
	//===========================================================
	
	$contact = new Container();
	$contact->contactId            =   "contact-id-5";
	$contact->role                 =   "Clinical Research Coordinator";
	$contact->firstName            =   "Kathy";
	$contact->middleName           =   "T";
	$contact->lastName             =   "Gavin";
	$contact->emailAddress         =   "kathy.gavin@LGHosp.com";
	$contact->notes                =   "Some notes.";
	$contact->faxPhone             =   "998-555-4734";
	$contact->workPhone            =   "998-555-1916";
	$contact->streetAddress        =   "13 Apple St";
	$contact->city                 =   "Newark";
	$contact->state                =   "NJ";
	$contact->country              =   "USA";
	$contact->postalCode           =   "12121";
	$contact->primarySpeciality    = "Clinical Data";
	$contacts[] = $contact;
}

//===========================================================
// Study: AMXN
// Site:  Baltimore Gen Hosp
//===========================================================

if ($siteId == "MD-1") {
	$contact = new Container();
	$contact->contactId            =   "contact-id-6";
	$contact->role                 =   "Principal Investigator";
	$contact->firstName            =   "Chris";
	$contact->middleName           =   "R";
	$contact->lastName             =   "Taylor";
	$contact->emailAddress         =   "chris.taylor@BGH.com";
	$contact->notes                =   "Some notes.";
	$contact->faxPhone             =   "778-555-4734";
	$contact->workPhone            =   "778-555-1916";
	$contact->streetAddress        =   "103 Hospital Way";
	$contact->city                 =   "Baltimore";
	$contact->state                =   "MD";
	$contact->country              =   "USA";
	$contact->postalCode           =   "21210";
	$contact->primarySpeciality    = "Medical";
	$contacts[] = $contact;
	
	//=============================================================
	
	
	$contact = new Container();
	$contact->contactId            =   "contact-id-7";
	$contact->role                 =   "Clinical Research Coordinator";
	$contact->firstName            =   "Patty";
	$contact->middleName           =   "R";
	$contact->lastName             =   "Grasso";
	$contact->emailAddress         =   "patty.grasso@BGH.com";
	$contact->notes                =   "Some notes.";
	$contact->faxPhone             =   "778-555-4732";
	$contact->workPhone            =   "778-555-1917";
	$contact->streetAddress        =   "103 Hospital Way";
	$contact->city                 =   "Baltimore";
	$contact->state                =   "MD";
	$contact->country              =   "USA";
	$contact->postalCode           =   "21210";
	$contact->primarySpeciality    = "Clinical Data";
	$contacts[] = $contact;
}

//===========================================================
// Study: AMXN
// Site:  Geraldton Gen Hosp
//===========================================================

if ($siteId == "NJ-2") {
	$contact = new Container();
	$contact->contactId            =   "contact-id-8";
	$contact->role                 =   "Principal Investigator";
	$contact->firstName            =   "Dougalas";
	$contact->middleName           =   "R";
	$contact->lastName             =   "Walker";
	$contact->emailAddress         =   "doug.walker@geraldton.com";
	$contact->notes                =   "Some notes.";
	$contact->faxPhone             =   "222-555-4734";
	$contact->workPhone            =   "222-555-1916";
	$contact->streetAddress        =   "19234 Turing Way";
	$contact->city                 =   "Basking Ridge";
	$contact->state                =   "NJ";
	$contact->country              =   "USA";
	$contact->postalCode           =   "21210";
	$contact->primarySpeciality    = "Medical";
	$contacts[] = $contact;

	//=============================================================


	$contact = new Container();
	$contact->contactId            =   "contact-id-7";
	$contact->role                 =   "Clinical Research Coordinator";
	$contact->firstName            =   "Steve";
	$contact->middleName           =   "R";
	$contact->lastName             =   "Coverto";
	$contact->emailAddress         =   "stevce.coverto@geraldton.com";
	$contact->notes                =   "Some notes.";
	$contact->faxPhone             =   "222-555-4734";
	$contact->workPhone            =   "222-555-1916";
	$contact->streetAddress        =   "19234 Turing Way";
	$contact->city                 =   "Basking Ridge";
	$contact->state                =   "NJ";
	$contact->country              =   "USA";
	$contact->postalCode           =   "21210";
	$contact->primarySpeciality    = "Clinical Data";
	$contacts[] = $contact;
}

//=============================================================
///
// Build JSON.
//
$data = new Container(); 
$data->contacts = $contacts;

echo json_encode($data);

?>