<?php 
	include_once "classes/singleton#1.php";
class Update_Police_Officer_Data_Class
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
    
    public function update_registered_police_officers($id,$police_id,$first_name, $middle_name, $last_name, $date_of_birth, $gender, $nationality, $address, $country, $city, $state, $phone, $email,$previously_registered_station,$currently_registered_station,$rank,$position,$date_join_police)
    {

            $stmt = $this->db->prepare("SELECT * FROM  register_police_officer  WHERE police_id ='$police_id' or email='$email'");
            $stmt->execute();
            $result = $stmt->rowCount();
            print_r($result);
         if($result == 0){
            $query = "UPDATE register_police_officer set police_id='" .$_POST[$police_id] . "',first_name='" . trim(ucwords($_POST[$first_name])) . "', middle_name='" . trim(ucwords($_POST[$middle_name])) . "', last_name='" . trim(ucwords($_POST[$last_name])) . "', date_of_birth='" . trim(ucwords($_POST[$date_of_birth])) . "' ,gender='" . trim(ucwords($_POST[$gender])) . "',nationality='" . trim(ucwords($_POST[$nationality])) . "', address='" . trim(($_POST[$address])) . "', country='" . trim(ucwords($_POST[$country])) . "', city='" . trim(ucwords($_POST[$city])) . "', state='" . trim(ucwords($_POST[$state])) . "', phone='" . trim(ucwords($_POST[$phone])) . "', email='" . trim(ucwords($_POST[$email])) . "', previously_registered_station='" . trim(ucwords($_POST[$previously_registered_station])) . "', currently_registered_station='" . trim(ucwords($_POST[$currently_registered_station])) . "', rank='" . trim(ucwords($_POST[$rank])) . "', rank='" . trim(ucwords($_POST[$rank])) . "', position='" . trim(ucwords($_POST[$position])) . "', date_join_police='" . trim(ucwords($_POST[$date_join_police])) . "' WHERE police_id = '$id' ";
            $this->db->query($query) or die($this->db->error);
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
           <strong>Data Updated</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
      
        }else{
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
            <strong>Email or Identification_No</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
        }

}

private function isImage()
    {
        if (!in_array($this->image_temp, $this->allowed_image_types)) {
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
           <strong>This is not a valid image type!</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
    }

    private function imageNameValidation()
    {
        return $this->image_name = filter_var($this->image_name, FILTER_SANITIZE_STRING);
    }

    private function sizeValidation()
    {
        if ($this->image_size > $this->upload_max_size) {
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
           <strong>File is bigger than 2MB!</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
    }
    private function checkFile()
    {
        if (file_exists($this->upload_folder . $this->image_name)) {
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
           <strong>File already exists in folder!</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
    }

    private function moveFile()
    {
        if (!move_uploaded_file($this->image_temp, $this->upload_folder . $this->image_name)) {
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
           <strong>There was an error, please try again!</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
    }
    public function UpdateImage_previous_police_officer_photo($id,$files,$previous)
    {
        $image_name_previous_passport_photo = $files['previous_photo']['name'];
        // $image_name_previous_signature_photo = $files['previous_signature_photo']['name'];
        // $image_name_previous_id_document_photo = $files['previous_id_document_photo']['name'];
        $image_temp = $files['previous_photo']['tmp_name'];
        // $image_temp = $files['previous_signature_photo']['tmp_name'];
        // $image_temp = $files['previous_id_document_photo']['tmp_name'];
        $error = $files['previous_photo']['error'];
        $previous_post = $_POST[$previous];
        $exp = explode(".", $image_name_previous_passport_photo);
        $end = end($exp);
        $path =  "Police_Officer/".$image_name_previous_passport_photo;
        $allowed_ext = array("gif", "jpg", "jpeg", "png");
        $this->isImage(); // Checking if the uploaded file is actually an image.
        $this->imageNameValidation(); // Sanitizing the images name.
        $this->sizeValidation(); // Validating the file size.
        $this->checkFile(); // Checking if the file exists in uploads folder.
        if ($this->error == null) {
            // moving the file from the temporary location to the uploads folder.
            $this->moveFile();
        }
 
            if (in_array($end, $allowed_ext)) {
                if(!(file_exists($previous_post))){
                    // unlink($previous_post);
                    move_uploaded_file($image_temp, $path);
                    $query = "UPDATE register_police_officer set photo = '$path' WHERE police_id  = '$id'";
                    $resut = $this->db->query($query) or die($this->db->error);
                    return $this->error = '<div class="alert alert-success alert-dismissible fade show">
                    <strong>Updated!</strong> A problem has been occurred while submitting your data.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>';
                }else{
                    unlink($previous_post);
                    if (move_uploaded_file($image_temp, $path)) {
                        $query = "UPDATE register_police_officer set photo = '$path' WHERE police_id   = '$id'";
                        $resut = $this->db->query($query) or die($this->db->error);
                        return $this->error =  '<div class="alert alert-success alert-dismissible fade show">
                        <strong>Updated!</strong> A problem has been occurred while submitting your data.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
                    }  
                    }
                }
                else{
                    echo "<div class='alert alert-danger'>
                       <strong>Not Updated!</strong> Indicates a successful or positive action.
                     </div>";
               }
                
                }
                public function get_userImage($id,$value)
                {
            
            
                    $sth = $this->db->prepare("SELECT $value FROM register_police_officer WHERE police_id  = $id");
                    $sth->execute();
                    $result = $sth->fetchAll();
                    // foreach($result as $row){
                    //     return$row[$value];
                    // }
                    return $result; 
            
                    // $query = "SELECT $value FROM suspected_person_detailes WHERE document_no = $id";
            
                    // $result = $this->db->query($query) or die($this->db->error);
            
                    // $user_data = $result->fetch_array(MYSQLI_ASSOC);
                    // echo $user_data[$value];
            
            
                }

}