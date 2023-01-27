<?php 
	include "Connection_Class.php";
class RegisterNewCrimeClass
{

    protected $db;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $date_of_birth;
    public $marital_status;
    public $resident_address;
    public $city;
    public $state;
    public $phone;
    public $passport_photo;
    public $signature_photo;
    public $Id_document_type;

    public $id_document_photo;

    public $hight;
    public $weight;
    public $eye_color;
    public $hair_color;
    public $emergency_phone;
    public $date_of_court_appearance;
    public $location_of_court;
    public $Nature_of_offence;
    public $Investigating_off_first_name;
    public $Investigating_off_last_name;
    public $Investigating_off_id;
    public $date_of_offence;
    public $location_of_offence;
  
    public $message;

    public $table_name = "crime_registration_form";

    // public $passport_photo;
    private $temp_name;
    private $image_size;
    private $image_temp;
    private $upload_folder = "img/";
    private $upload_max_size  = 2*1024*1024;

    private $allowed_image_types = ["image/jpeg", "image/jpg", "image/png", "image/gif"];


    // public $table_name_registeree = "registeree";

    public function __construct()
    { 
      $this->db = db::getInstance();
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


    public function insertNewIncidentReporter($files)
  {
   
  }
}