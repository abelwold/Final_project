<?php 
	include_once "singleton#1.php";
class RegisterCrime{
    
    //connection strings
 
    protected $db;
    //image folder path

    public $error_messages;

    public $document_no;

    public $error;
    
    public function __construct()
    {
        $this->db = DatabaseConnection::getInstance();
        return gettype($this->db);
        
       
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

        $image1 = $files['passport_photo']['name'];
        $image2 = $files['signature_photo']['name'];
        $image3 = $files['id_document_photo']['name'];
    
        $target_dir = "suspected_person_detailes/";
        $target_file1 = $target_dir . basename($image1);
        $target_file2 = $target_dir . basename($image2);
        $target_file3 = $target_dir . basename($image3);
    
        $extension1 = substr($image1, strlen($image1)-4,strlen($image1));
        $extension2 = substr($image2, strlen($image2)-4,strlen($image2));
        $extension3 = substr($image3, strlen($image3)-4,strlen($image3));

        print_r($extension1);
        print_r($extension2);

        print_r($extension3);


    
        $allowed_ex = array(".jpg", ".jpeg", ".png", ".gif");
    
        if($files["passport_photo"]["size"]>1024000 || $files["signature_photo"]["size"]>1024000 || $files["id_document_photo"]["size"]>1024000 )
        {
        return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
        <strong>large file</strong> A problem has been occurred while submitting your data.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';

        }
        elseif(file_exists($target_file1) || file_exists($target_file2) || file_exists($target_file3))
        {
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
            <strong>give image unique name</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';

        }
        elseif(!in_array($extension1,$allowed_ex) || !in_array($extension2,$allowed_ex) || !in_array($extension3,$allowed_ex))
        {
        return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
        <strong>file not image</strong> A problem has been occurred while submitting your data.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';

        }
        else
        {
        move_uploaded_file($files["passport_photo"]["tmp_name"],$target_file1);
        move_uploaded_file($files["signature_photo"]["tmp_name"],$target_file2);
        move_uploaded_file($files["id_document_photo"]["tmp_name"],$target_file3);

  $first_name = $inputData['first_name'];
  $middle_name = $inputData['middle_name'];
  $last_name = $inputData['last_name'];
  $date_of_birth = $inputData['date_of_birth'];
  $marital_status = $inputData['marital_status'];
  $resident_address = $inputData['resident_address'];
  $city = $inputData['city'];
  $state = $inputData['state'];
  $phone = $inputData['phone'];
  $Id_document_type = $inputData['Id_document_type'];
  $hight = $inputData['hight'];
  $weight = $inputData['weight'];
  $eye_color = $inputData['eye_color'];
  $hair_color = $inputData['hair_color'];
  $emergency_phone = $inputData['emergency_phone'];
  $date_of_court_appearance = $inputData['date_of_court_appearance'];
  $location_of_court = $inputData['location_of_court'];
  $Nature_of_offence = $inputData['Nature_of_offence'];
  $Investigating_off_first_name = $inputData['Investigating_off_first_name'];
  $Investigating_off_last_name = $inputData['Investigating_off_last_name'];
  $Investigating_off_id = $inputData['Investigating_off_id']; 
  $date_of_offence = $inputData['date_of_offence'];
  $location_of_offence = $inputData['location_of_offence'];
  $city = $inputData['city'];

  $sql_suspected_person_detailes = "INSERT INTO suspected_person_detailes(document_no,first_name, middle_name, last_name, date_of_birth, marital_status, resident_address, city, state, phone,passport_photo,signature_photo, Id_document_type,id_document_photo, hight,weight,eye_color,hair_color,emergency_phone)VALUES('$this->document_no','$first_name','$middle_name','$last_name','$date_of_birth','$marital_status','$resident_address','$city','$state','$phone','$target_file1','$target_file2','$Id_document_type','$target_file3','$hight','$weight','$eye_color','$hair_color','$emergency_phone')";
  $result = $this->db->query($sql_suspected_person_detailes);
  if($result == true){
      $sql_details_of_offence = "INSERT INTO details_of_offence(date_of_court_appearance,location_of_court,Nature_of_offence,date_of_offence,location_of_offence,document_no)VALUES('$date_of_court_appearance','$location_of_court','$Nature_of_offence','$date_of_offence','$location_of_offence','$this->document_no')";
      $result_two = $this->db->query($sql_details_of_offence);
      if($result_two == true){
          $sql_details_of_offence = "INSERT INTO  investigating_officer_form (Investigating_off_first_name,Investigating_off_last_name,Investigating_off_id,document_no)VALUES('$Investigating_off_first_name','$Investigating_off_last_name','$Investigating_off_id','$this->document_no')";
          $result_two = $this->db->query($sql_details_of_offence);
        return $this->error ='<div class="alert alert-success alert-dismissible fade show">
        <strong>succuss</strong> A problem has been occurred while submitting your data.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';

          }
          else{
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
            <strong>Unknown</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
          } 
         
      }
        }
    }
    
    public function get_images()
    {
        $arr = array();
        //get all images from table image_uploads
        $sql_string = "select * from image_uploads";
        $query         = mysqli_query($this->db, $sql_string);
        
        while($row = mysqli_fetch_assoc($query)){
            $arr[] = $row;
        }
        //return the result set
        return $arr;
    }

    
}

    ?>