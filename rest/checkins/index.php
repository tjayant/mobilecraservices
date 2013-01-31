  <?php
  header("Content-type:text/plain; encoding=UTF8");
  
  error_log("method = " . $_SERVER['REQUEST_METHOD'] . "\n", 3, LOG_FILE);
  
  class Checkin {

  } // class Checkin
  
  $checkins = array();
  
  ///
  // Correlated checkin.
  //
  $checkin = new Checkin();
  $checkin->description = "dummy100";
  $checkin->studyId = "5600";
  $checkin->studyName="some study";
  $checkin->siteId = "42";
  $checkin->siteName="some site name";
  $checkin->checkinId = "62";
  $checkin->visitId = "8234";
  $checkin->latitude = "20.2";
  $checkin->longitude = "5.5";
  $checkin->timestamp = "2011-10-20T10:23:37-0700";
  $checkin->comment = "The quick brown fox jumped over the lazy sleeping dog.";  
  $checkins[] = $checkin;

  ///
  // Incomplete checkin.
  //
  // An incomplete checkin has all the information except for visitId.
  //
  $checkin = new Checkin();
  $checkin->description = "50 College Dr, North Bay, ON P1B 0A4, Canada";
  $checkin->studyId = "5600";
  $checkin->studyName="Klendathu";
  $checkin->siteId = "42";
  $checkin->siteName="North Bay Regional Health Centre";
  $checkin->checkinId = "62";
  $checkin->latitude = "46.33521";
  $checkin->longitude = "-79.498347";
  $checkin->timestamp = "2011-10-21T10:23:37-0700";
  $checkin->comment = "Incomplete checkin.";
  $checkins[] = $checkin;

  ///
  // Uncorrelated checkin.
  //
  // An uncorrelated checkin lacks site and study info.
  //
  $checkin = new Checkin();
  $checkin->description = "120 Napier St, Goderich, ON N7A 1W5, Canada";
  $checkin->checkinId = "63";
  $checkin->latitude = "43.750281";
  $checkin->longitude = "-81.704818";
  $checkin->timestamp = "2011-10-22T10:23:37-0700";
  $checkin->comment = "Uncorrelated checkin.";  
  $checkins[] = $checkin;
  
  
  $data = array();
  $data['checkins'] = $checkins;


  echo json_encode($data);
  ?>
