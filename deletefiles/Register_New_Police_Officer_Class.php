<?php 
	include_once "singleton#1.php";
class RegisterNewPoliceOff{


    protected $db;

    public $document_no;
    
    public $error;

    public function __construct()
    {
        $this->db = DatabaseConnection::getInstance();
       
    }
    public function storeNewPoliceOfficer($inputData,$files)
    {

        $image1 = $files['photo']['name'];

    
        $target_dir = "Police_Officer/";
        $target_file1 = $target_dir . basename($image1);

    
        $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));

    
        $check1 = getimagesize($files['photo']['tmp_name']);

    
        $extension1 = substr($image1, strlen($image1)-4,strlen($image1));

    
        $allowed_ex = array(".jpg", ".jpeg", ".png", ".gif");

        if($files["photo"]["size"]>1024000)
        {
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
            <strong>large file</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
        }
        else
        {
        if(file_exists($target_file1))
        {
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
            <strong>give image unique name</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
        }
        elseif(!in_array($extension1,$allowed_ex))
        {
            return $this->error ='<div class="alert alert-danger alert-dismissible fade show">
        <strong>file not image</strong> A problem has been occurred while submitting your data.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';
        }
        else
        {
        move_uploaded_file($files["photo"]["tmp_name"],$target_file1);

        $police_id = $inputData['police_id'];
        $first_name = $inputData['first_name'];
        $middle_name = $inputData['middle_name'];
        $last_name = $inputData['last_name'];
        $date_of_birth = $inputData['date_of_birth'];
        $gender = $inputData['gender'];
        $nationality = $inputData['nationality'];
        $address = $inputData['address'];
        $country = $inputData['country'];
        $city = $inputData['city'];
        $state = $inputData['state'];
        $phone = $inputData['phone'];
        $email = $inputData['email'];
        $previously_registered_station = $inputData['previously_registered_station'];
        $currently_registered_station = $inputData['currently_registered_station'];
        $rank = $inputData['rank'];
        $position = $inputData['position'];
        $date_join_police = $inputData['date_join_police'];


        $sql_register_police_officer = "INSERT INTO register_police_officer(police_id,first_name, middle_name, last_name, date_of_birth, gender, nationality, address, country, city, state,phone,email, photo,previously_registered_station, currently_registered_station,rank,position,date_join_police)VALUES('$police_id','$first_name','$middle_name','$last_name','$date_of_birth','$gender','$nationality','$address','$country','$city','$state','$phone','$email','$target_file1','$previously_registered_station','$currently_registered_station','$rank','$position','$date_join_police')";
        $result = $this->db->query($sql_register_police_officer);
        if($result){
          return $this->error ='<div class="alert alert-success alert-dismissible fade show">
          <strong>succuss</strong> A problem has been occurred while submitting your data.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>';
            }
            else{
              return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
              <strong>Please insert all fields </strong> A problem has been occurred while submitting your data.
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>';
            }
        }
    }
            }
        }
    ?>