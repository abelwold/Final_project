<?php 
	include_once "singleton#1.php";
class Register_New_User_From_Inside{


    protected $db;

    public $document_no;
    
    public $error;

    public $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    public function __construct()
    {
        $this->db = DatabaseConnection::getInstance();
       
    }
    public function storeNewUserFromInside($inputData,$files)
    {

        $image1 = $files['photo']['name'];

    
        $target_dir = "img/";
        $target_file1 = $target_dir . basename($image1);

    
        // $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));

    
        // $check1 = getimagesize($files['photo']['tmp_name']);

    
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

        $identification_no = $inputData['identification_no'];
        $first_name = $inputData['first_name'];
        $last_name = $inputData['last_name'];
        $rank = $inputData['rank'];
        $address = $inputData['address'];
        $gender = $inputData['gender'];
        $email = $inputData['email'];
        $phone = $inputData['phone'];
        $region = $inputData['region'];
        $country = $inputData['country'];
        $date_of_birth = $inputData['date_of_birth'];
        $user_type = $inputData['user_type'];
        $auto_password = substr( str_shuffle( $this->chars ), 0, 8 );


        $query = "SELECT * from user_form  WHERE email='$email'";
        $res = $this->db->query($query) or die($this->db->error);
		$count_row = $res->rowCount();
        if($count_row == 0){
            $sql_register_police_officer = "INSERT INTO user_form(identification_no,first_name, last_name,rank,address,gender,email,phone,photo,region,country,date_of_birth,user_type,auto_password)VALUES('$identification_no','$first_name','$last_name','$rank','$address','$gender','$email','$phone','$target_file1','$region','$country','$date_of_birth','$user_type','$auto_password')";
            $result = $this->db->query($sql_register_police_officer);
                if($result){
                    return $this->error ='<div class="alert alert-success alert-dismissible fade show">
                    <strong>succuss</strong> A problem has been occurred while submitting your data.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
                    header("location: Register_New_User_From_Inside.php");
                            }
                        }
            else{
              return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
              <strong>Already used </strong> A problem has been occurred while submitting your data.
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>';
            }
        }
    }
            }
        }
    ?>