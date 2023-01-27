<?php 
	include_once "classes/singleton#1.php";
class Update_Crime_Data_Class
{
    public $image_name;
    private $image_size;
    private $image_temp;
    private $upload_folder = "img/";
    private $upload_max_size = 2 * 1024 * 1024;
    protected $db;
    public $error;

    private $allowed_image_types = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
    public $user_form = "user_form";

    public function __construct()
    {
      $this->db = DatabaseConnection::getInstance();
    }
    public function get_session()
    {
        return $_SESSION['login'];
    }
    
    public function update_registered_police_officers($id, $first_name, $middle_name, $last_name, $date_of_birth, $gender, $nationality, $address, $country, $city, $state, $phone, $email,$previously_registered_station,$currently_registered_station,$rank,$position,$date_join_police)
    {
    // $query = "SELECT * FROM  user_form  WHERE identification_no='$identification_no' and email='$email'";
    
    // $result = $this->db->query($query) or die($this->db->error);
    
    // $count_row = mysqli_fetch_row($result);
    
    //if the username is not in db then insert to the table

        // if (!$count_row > 0) {
            $query = "UPDATE suspected_person_detailes set first_name='" . trim(ucwords($_POST[$first_name])) . "', middle_name='" . trim(ucwords($_POST[$middle_name])) . "', last_name='" . trim(ucwords($_POST[$last_name])) . "', date_of_birth='" . trim(ucwords($_POST[$date_of_birth])) . "' ,gender='" . trim(ucwords($_POST[$gender])) . "',nationality='" . trim(ucwords($_POST[$nationality])) . "', address='" . trim(($_POST[$address])) . "', country='" . trim(ucwords($_POST[$country])) . "', city='" . trim(ucwords($_POST[$city])) . "', state='" . trim(ucwords($_POST[$state])) . "', phone='" . trim(ucwords($_POST[$phone])) . "', email='" . trim(ucwords($_POST[$email])) . "', previously_registered_station='" . trim(ucwords($_POST[$previously_registered_station])) . "', currently_registered_station='" . trim(ucwords($_POST[$currently_registered_station])) . "', rank='" . trim(ucwords($_POST[$rank])) . "', rank='" . trim(ucwords($_POST[$rank])) . "', rank='" . trim(ucwords($_POST[$rank])) . "', position='" . trim(ucwords($_POST[$position])) . "', date_join_police='" . trim(ucwords($_POST[$date_join_police])) . "' WHERE document_no= $id";
            $result = $this->db->query($query) or die($this->db->error);
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
           <strong>Data Updated</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        // }

    }
}