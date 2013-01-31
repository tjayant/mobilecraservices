  <?php
  
  class Visit {
		public $visitId;
		public $visitName;
		public $scheduledDate;
		
		public function __construct($visitId, $visitName, $scheduledDate) {
			$this->visitId = $visitId;
			$this->visitName = $visitName;
			$this->scheduledDate = $scheduledDate;
		}
  } // class Visit

  $visits = array();
  $visits[] = new Visit(100, "Visit0 for Study #0/Site 32767", "2011-11-08T16:20:01-0500");
  $visits[] = new Visit(101, "Visit1 for Study #0/Site 32767", "2011-11-08T16:20:01-0500");
  $visits[] = new Visit(102, "Visit2 for Study #0/Site 32767", "2011-11-08T16:20:01-0500");
  
  $data = array();
  $data['visits'] = $visits;

  header("Content-type:text/plain; encoding=UTF8");
  echo json_encode($data);
  
  ?>
