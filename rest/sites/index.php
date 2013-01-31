  <?php

  class Study {
  	public $studyName;
  	
  	public function __construct($Name) {
  		$this->studyName = $Name;
  	}
  } // class Study
  
  class Site {
  	public $siteName;
  	public $siteAddress;
  	public $siteContactNo;
  	public $siteStudies;
  	
  	public function __construct($Site, $SiteAddress, $SiteContactNo, $Study) {
  		$this->siteName = $Site;
  		$this->siteAddress = $SiteAddress;
  		$this->siteContactNo = $SiteContactNo;
  		$this->siteStudies = $Study;
  	}
  } // class Site
  
  $page = $_GET["page"];
  
  $sitesAndStudies = array();
  
//  $sitesAndStudies['startid'] = 0;
  
  $sitesAndStudies[] = new Site('Bellevue Hospital',
                                '123 Fake Street',
                                '1 800 555 1212',
                                array(
                                    new Study('Indigo'),
                                    new Study('XTrial'),
                                    new Study('Servier')
                                ));

  $sitesAndStudies[] = new Site('West Bellevue Hospital',
                                '149 Fake Street',
                                '1 800 555 2121',
                                array(
                                    new Study('DOOL1')
                                ));

  $data = array();
  $data['sites'] = $sitesAndStudies;
//  $data['next'] = "http://localhost/~drpietsch/mobilecraservice/getStudySite/?page=" . ($page + 1);

  header("Content-type:text/plain; encoding=UTF8");
//  echo json_encode($sitesAndStudies);
  echo json_encode($data);
  
  ?>
