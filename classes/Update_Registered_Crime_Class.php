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

    public function get_userImage($id,$value)
    {


        // $sth = $this->db->prepare("SELECT $value FROM suspected_person_detailes WHERE document_no = $id");
        // $sth->execute();
        // $result = $sth->fetchAll();
        // foreach($result as $row){
        //     return$row[$value];
        // }
        // return $result; 

        // $query = "SELECT $value FROM suspected_person_detailes WHERE document_no = $id";

        // $result = $this->db->query($query) or die($this->db->error);

        // $user_data = $result->fetch_array(MYSQLI_ASSOC);
        // echo $user_data[$value];


    }

    public function get_stored_data($id, $column_name)
    {
        $query = "SELECT * from  suspected_person_detailes WHERE document_no = '$id' ";
        $results = $this->db->query($query) or die($this->db->error);
        $row = mysqli_fetch_array($results);
        return $row[$column_name];
    }

    public function update_suspected_person_detailes_data($id, $first_name, $middle_name, $last_name, $date_of_birth, $marital_status, $resident_address, $city, $state, $phone, $Id_document_type, $hight, $weight,$eye_color,$hair_color,$emergency_phone)
    {
    // $query = "SELECT * FROM  user_form  WHERE identification_no='$identification_no' and email='$email'";
    
    // $result = $this->db->query($query) or die($this->db->error);
    
    // $count_row = mysqli_fetch_row($result);
    
    //if the username is not in db then insert to the table

        // if (!$count_row > 0) {
            $query = "UPDATE suspected_person_detailes set first_name='" . trim(ucwords($_POST[$first_name])) . "', middle_name='" . trim(ucwords($_POST[$middle_name])) . "', last_name='" . trim(ucwords($_POST[$last_name])) . "', date_of_birth='" . trim(ucwords($_POST[$date_of_birth])) . "' ,marital_status='" . trim(ucwords($_POST[$marital_status])) . "',resident_address='" . trim(ucwords($_POST[$resident_address])) . "', city='" . trim(($_POST[$city])) . "', state='" . trim(ucwords($_POST[$state])) . "', phone='" . trim(ucwords($_POST[$phone])) . "', Id_document_type='" . trim(ucwords($_POST[$Id_document_type])) . "', hight='" . trim(ucwords($_POST[$hight])) . "', weight='" . trim(ucwords($_POST[$weight])) . "', eye_color='" . trim(ucwords($_POST[$eye_color])) . "', hair_color='" . trim(ucwords($_POST[$hair_color])) . "', emergency_phone='" . trim(ucwords($_POST[$emergency_phone])) . "' WHERE document_no= $id";
            $result = $this->db->query($query) or die($this->db->error);
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
           <strong>Data Updated</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        // }

    }
    public function update_investigating_officer_form($id, $Investigating_off_first_name, $Investigating_off_last_name, $Investigating_off_id)
    {
    // $query = "SELECT * FROM  user_form  WHERE identification_no='$identification_no' and email='$email'";
    
    // $result = $this->db->query($query) or die($this->db->error);
    
    // $count_row = mysqli_fetch_row($result);
    
    //if the username is not in db then insert to the table

        // if (!$count_row > 0) {
            $query = "UPDATE investigating_officer_form set Investigating_off_first_name='" . trim(ucwords($_POST[$Investigating_off_first_name])) . "', Investigating_off_last_name='" . trim(ucwords($_POST[$Investigating_off_last_name])) . "', Investigating_off_id='" . trim(ucwords($_POST[$Investigating_off_id])) . "' WHERE document_no= $id";
            $result = $this->db->query($query) or die($this->db->error);
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
            <strong>Data Updated</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
        // }

    }
    public function update_details_of_offence($id, $date_of_court_appearance, $location_of_court, $Nature_of_offence, $date_of_offence, $location_of_offence)
    {
    // $query = "SELECT * FROM  user_form  WHERE identification_no='$identification_no' and email='$email'";
    
    // $result = $this->db->query($query) or die($this->db->error);
    
    // $count_row = mysqli_fetch_row($result);
    
    //if the username is not in db then insert to the table

        // if (!$count_row > 0) {
            $query = "UPDATE details_of_offence set date_of_court_appearance='" . trim(ucwords($_POST[$date_of_court_appearance])) . "', location_of_court='" . trim(ucwords($_POST[$location_of_court])) . "', Nature_of_offence='" . trim(ucwords($_POST[$Nature_of_offence])) . "', date_of_offence='" . trim(ucwords($_POST[$date_of_offence])) . "' ,location_of_offence='" . trim(ucwords($_POST[$location_of_offence])) . "'  WHERE document_no= $id";
            $result = $this->db->query($query) or die($this->db->error);
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
           <strong>Updated </strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        // }

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
    public function UpdateImage_previous_passport_photo($id,$files,$previous)
    {
        $image_name_previous_passport_photo = $files['previous_passport_photo']['name'];
        // $image_name_previous_signature_photo = $files['previous_signature_photo']['name'];
        // $image_name_previous_id_document_photo = $files['previous_id_document_photo']['name'];
        $image_temp = $files['previous_passport_photo']['tmp_name'];
        // $image_temp = $files['previous_signature_photo']['tmp_name'];
        // $image_temp = $files['previous_id_document_photo']['tmp_name'];
        $error = $files['previous_passport_photo']['error'];
        $previous_post = $_POST[$previous];
        $exp = explode(".", $image_name_previous_passport_photo);
        $end = end($exp);
        $path =  "suspected_person_detailes/".$image_name_previous_passport_photo;
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
                    $query = "UPDATE suspected_person_detailes set passport_photo = '$path' WHERE document_no = '$id'";
                    $resut = $this->db->query($query) or die($this->db->error);
                    return $this->error = '<div class="alert alert-success alert-dismissible fade show">
                    <strong>Updated!</strong> A problem has been occurred while submitting your data.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>';
                }else{
                    unlink($previous_post);
                    if (move_uploaded_file($image_temp, $path)) {
                        $query = "UPDATE suspected_person_detailes set passport_photo = '$path' WHERE document_no = '$id'";
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

                public function UpdateImage_previous_signature_photo($id,$files,$previous)
    {
        $image_name_previous_signature_photo = $files['previous_signature_photo']['name'];
        // $image_name_previous_signature_photo = $files['previous_signature_photo']['name'];
        // $image_name_previous_id_document_photo = $files['previous_id_document_photo']['name'];
        $image_temp = $files['previous_signature_photo']['tmp_name'];
        // $image_temp = $files['previous_signature_photo']['tmp_name'];
        // $image_temp = $files['previous_id_document_photo']['tmp_name'];
        $error = $files['previous_signature_photo']['error'];
        $previous_post = $_POST[$previous];
        $exp = explode(".", $image_name_previous_signature_photo);
        $end = end($exp);
        $path =  "suspected_person_detailes/".$image_name_previous_signature_photo;
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
                    $query = "UPDATE suspected_person_detailes set signature_photo = '$path' WHERE document_no = '$id'";
                    $resut = $this->db->query($query) or die($this->db->error);
                    return $this->error = '<div class="alert alert-success alert-dismissible fade show">
                    <strong>Updated!</strong> A problem has been occurred while submitting your data.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>';
                }else{
                    unlink($previous_post);
                    if (move_uploaded_file($image_temp, $path)) {
                        $query = "UPDATE suspected_person_detailes set signature_photo = '$path' WHERE document_no = '$id'";
                        $resut = $this->db->query($query) or die($this->db->error);
                        return $this->error = '<div class="alert alert-success alert-dismissible fade show">
                        <strong>Updated!</strong> A problem has been occurred while submitting your data.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
                    }  
                    }
                }
                else{
                    echo "<div class='alert alert-danger'>
                       <strong>Success!</strong> Indicates a successful or positive action.
                     </div>";
               }
                
                }


                public function UpdateImage_previous_id_document_photo($id,$files,$previous)
    {
        $image_name_previous_id_document_photo = $files['previous_id_document_photo']['name'];
        // $image_name_previous_signature_photo = $files['previous_signature_photo']['name'];
        // $image_name_previous_id_document_photo = $files['previous_id_document_photo']['name'];
        $image_temp = $files['previous_id_document_photo']['tmp_name'];
        // $image_temp = $files['previous_signature_photo']['tmp_name'];
        // $image_temp = $files['previous_id_document_photo']['tmp_name'];
        $error = $files['previous_id_document_photo']['error'];
        $previous_post = $_POST[$previous];
        $exp = explode(".", $image_name_previous_id_document_photo);
        $end = end($exp);
        $path =  "suspected_person_detailes/".$image_name_previous_id_document_photo;
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
                    $query = "UPDATE suspected_person_detailes set id_document_photo = '$path' WHERE document_no = '$id'";
                    $resut = $this->db->query($query) or die($this->db->error);
                    return $this->error = "<div class='alert alert-success'>
                    <strong>Success!</strong> Indicates a successful or positive action.
                  </div>";
                }else{
                    unlink($previous_post);
                    if (move_uploaded_file($image_temp, $path)) {
                        $query = "UPDATE suspected_person_detailes set id_document_photo = '$path' WHERE document_no = '$id'";
                        $resut = $this->db->query($query) or die($this->db->error);
                        return $this->error = "<div class='alert alert-success'>
                        <strong>Success!</strong> Indicates a successful or positive action.
                      </div>";
                    }  
                    }
                }
                else{
                    echo "<div class='alert alert-danger'>
                       <strong>Success!</strong> Indicates a successful or positive action.
                     </div>";
               }
                
                }
            

    public function deactivate_account($id){
        {
			$sql = "DELETE from $this->user_form where id=$id";
			$query = $this->db->query($sql);
			if ($query) {
                session_destroy();
                header("Location: Admin_Iogin.php");
			}else{
				return false;
			}
		}
    }
}
$class = new Update_Crime_Data_Class();
$g = $class->get_userImage(552343094,'passport_photo');
print_r($g);
print_r('boom');