<?php 
	include_once "singleton#1.php";
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
 
  public function upload_image_and_store($inputData,$files)
  {

      $this->document_no = $this->createRandomAGTNO();
      $this->date = $this->getDatetimeNow();
      $j = 0;

      $target_path = "evidence/"; //Declaring Path for uploaded images
      for ($i = 0; $i < count($files['evidence']['name']); $i++) {//loop to get individual element from the array
  
          $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed
          $ext = explode('.', basename($files['evidence']['name'][$i]));//explode file name from dot(.) 
          $file_extension = end($ext); //store extensions in the variable
  
    // $target_path = $files['evidence']['name'][$i];//set the target path with a new name of image
          // $j = $j + 1;//increment the number of uploaded images according to the files in array       
  
     if (($files["evidence"]["size"][$i] < 4000000) //Approx. 100kb files can be uploaded.
                  && in_array($file_extension, $validextensions)) {
                    $val1 = str_replace(' ','_',$files['evidence']['tmp_name'][$i]);
                    $val2 = str_replace(' ','_',$target_path.$files['evidence']['name'][$i]);
              if (move_uploaded_file($val1, $val2)) {//if file moved to uploads folder
                  echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
              } else {//if file was not moved.
                  echo $j. ').<span id="error">please try again!.</span><br/><br/>';
              }
          } else {//if file size and file type was incorrect.
              echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
          }
      }

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
  $crime_type = $inputData['crime_type'];
  $crimes=implode(',',$crime_type);
  $incident_location = $inputData['incident_location'];
  $nature_incident = $inputData['nature_incident'];
  $incident_details = $inputData['incident_details'];
  $incident_motivated = $inputData['incident_motivated'];
  $date_of_incident = $inputData['date_of_incident'];
  $report_before = $inputData['report_before'];
  $arreseted = $inputData['arreseted']; 
  $file = $files['evidence']['name'];
  $evidence = implode(', ', $file);
  $uploadeveidence = str_replace(' ','_',$evidence);
  $certify = $inputData['certify'];
  $whichuser = $inputData['whichuser'];


$sql_registeree = "INSERT INTO registeree(rank,identification_no,first_name_registeree,last_name_registeree,date,crime_type,incident_location, nature_incident,incident_details,incident_motivated,report_before,arreseted,date_of_incident,evidence,certify,whichuser,document_no)VALUES('$rank','$identification_no','$first_name_registeree','$last_name_registeree','$this->date','$crimes','$incident_location','$nature_incident','$incident_details','$incident_motivated','$report_before','$arreseted','$date_of_incident','$uploadeveidence','$certify','$whichuser','$this->document_no')";

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

      public function Register_Crime_From_Website($inputData)
      {
    
          $this->document_no = $this->createRandomAGTNO();
          $this->date = $this->getDatetimeNow();
       
      $crime_type = $inputData['crime_type'];
      $first_name = $inputData['first_name'];
      $middel_name = $inputData['middel_name'];
      $last_name = $inputData['last_name'];
      $address = $inputData['address'];
      $address = $inputData['address'];
      $Do_you_know_when_it_happened = $inputData['Do_you_know_when_it_happened'];
      $date = $inputData['date'];
      $time = $inputData['time'];
      $other_address_details  = $inputData['other_address_details'];
      $people_involved_in_the_crime_access_vehicle = $inputData['people_involved_in_the_crime_access_vehicle'];
      $people_involved_in_the_crime_access_weapon = $inputData['people_involved_in_the_crime_access_weapon'];
      $do_you_know_about_the_person = $inputData['do_you_know_about_the_person'];
      $people_look_like = $inputData['people_look_like'];
      $contact_details_for_the_person = $inputData['contact_details_for_the_person'];
      $phone = $inputData['phone'];
      // $evidence = $inputData['evidence'];

  
    
    $sql_registeree = "INSERT INTO crime_or_incident_from_website(crime_type,document_no,first_name,middel_name,last_name,address, Do_you_know_when_it_happened,date,time,other_address_details,people_involved_in_the_crime_access_vehicle,people_involved_in_the_crime_access_weapon,do_you_know_about_the_person,people_look_like,contact_details_for_the_person,phone)VALUES('$crime_type','$this->document_no','$first_name','$middel_name','$last_name','$address','$Do_you_know_when_it_happened','$date','$time','$other_address_details','$people_involved_in_the_crime_access_vehicle','$people_involved_in_the_crime_access_weapon','$do_you_know_about_the_person','$people_look_like','$contact_details_for_the_person','$phone')";
    $result = $this->db->query($sql_registeree);
    if($result == true){
          return $this->error ='<div class="alert alert-success alert-dismissible fade show">
          <strong>succuss</strong> A problem has been occurred while submitting your data.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>';
            }else{
          return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
              <strong>Unknown</strong> A problem has been occurred while submitting your data.
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>';
        }
          }
  }
