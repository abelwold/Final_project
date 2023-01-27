<?php 
	include_once "classes/singleton#1.php";
class Register_Incident
{

    protected $db;
    public $document_no;
    public $date;
    public $error;
    public $table_name = "incident_reporter";
    public $table_name_registeree = "registeree";

    public function __construct()
    {
      $this->db = DatabaseConnection::getInstance();
      // $this->db = Connection::getInstance();
    }
    public function createRandomAGTNO() {
        do {
          $agt_no = mt_rand(100000000,900000000);
          $valid = true;
          if (preg_match('/(\d)\1\1/', $agt_no))
            $valid = false; // Same digit three times consecutively
          elseif (preg_match('/(\d).*?\1.*?\1.*?\1/', $agt_no))
            $valid = false; // Same digit four times in string
        } while ($valid === false);
        return $agt_no;
      }

     public function getDatetimeNow() {
        $tz_object = new DateTimeZone('Africa/Addis_Ababa');
        //date_default_timezone_set('Brazil/East');
    
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y\-m\-d\ h:i:s');
    }
 
  public function upload_image_and_store($inputData)
  {

      $this->document_no = $this->createRandomAGTNO();
      $this->date = $this->getDatetimeNow();

  $title = $inputData['title'];
  $first_name = $inputData['first_name'];
  $middel_name = $inputData['middel_name'];
  $last_name = $inputData['last_name'];
  $phone = $inputData['phone'];
  $address = $inputData['address'];
  $addressTwo = $inputData['addressTwo'];
  $city = $inputData['city'];
  $state = $inputData['state'];
  $zip_code = $inputData['zip_code'];

  $rank = $inputData['rank'];
  $identification_no = $inputData['identification_no'];
  $first_name_registeree = $inputData['first_name_registeree'];
  $last_name_registeree = $inputData['last_name_registeree'];
  $incident_location = $inputData['incident_location'];
  $nature_incident = $inputData['nature_incident'];
  $incident_details = $inputData['incident_details'];
  $incident_motivated = $inputData['incident_motivated'];
  $report_before = $inputData['report_before'];
  $arreseted = $inputData['arreseted']; 
  $certify = $inputData['certify'];


$sql_registeree = "INSERT INTO registeree(rank,identification_no,first_name_registeree,last_name_registeree,date,incident_location, nature_incident,incident_details,incident_motivated,report_before,arreseted,certify,document_no)VALUES('$rank','$identification_no','$first_name_registeree','$last_name_registeree','$this->date','$incident_location','$nature_incident','$incident_details','$incident_motivated','$report_before','$arreseted','$certify','$this->document_no')";

// $sql_incident_reporter = "INSERT INTO incident_reporter(document_no, title, first_name, middel_name, last_name, phone, address, addressTwo, city, state, zip_code, Date)VALUES('$this->document_no','$title','$first_name','$middel_name','$last_name','$phone','$address','$addressTwo','$city','$state','$zip_code','$this->date')";
$result = $this->db->query($sql_registeree);
if($result == true){
  $sql_incident_reporter = "INSERT INTO incident_reporter(document_no, title, first_name, middel_name, last_name, phone, address, addressTwo, city, state, zip_code, Date)VALUES('$this->document_no','$title','$first_name','$middel_name','$last_name','$phone','$address','$addressTwo','$city','$state','$zip_code','$this->date')";
    // $sql_registeree = "INSERT INTO registeree(rank,identification_no,first_name_registeree,last_name_registeree,date,incident_location, nature_incident,incident_details,incident_motivated,report_before,arreseted,certify,document_no)VALUES('$rank','$identification_no','$first_name_registeree','$last_name_registeree','$this->date','$incident_location','$nature_incident','$incident_details','$incident_motivated','$report_before','$arreseted','$certify','$this->document_no')";
    $result_two = $this->db->query($sql_incident_reporter);
    if($result_two == true){
      return $this->error ='<div class="alert alert-success alert-dismissible fade show">
      <strong>succuss</strong> A problem has been occurred while submitting your data.
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
        } 
    }else{
      return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
          <strong>Unknown</strong> A problem has been occurred while submitting your data.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>';
    }
      }
  }
// }