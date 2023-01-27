<?php 
	include_once "singleton#1.php";
class Update_User_Data_Class
{
    // $db = Database::getInstance();

    // $mysqli = $db->getConnection();
    
    // $sql_query = "SELECT foo FROM  etc";
    
    // $result = $mysqli->query($sql_query);
    public $image_name;
    private $image_size;
    private $image_temp;
    private $upload_folder = "img/";
    private $upload_max_size = 2 * 1024 * 1024;
    protected $db;
    public $error;
    public $connectionGet;

    private $allowed_image_types = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
    public $user_form = "user_form";

    public function __construct()
    {
        // $this->db = db::getInstance();
        $this->db = DatabaseConnection::getInstance();
        // $this->connectionGet =$db->getConnection();
    }
    public function get_session()
    {
        return $_SESSION['login'];
    }

    public function get_userImage($id)
    {

        // $sth = $this->connectionGet->query("SELECT photo FROM user_form WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
        // return $sth->execute();
;
        // return $result;
        $stmt = $this->db->prepare("SELECT photo FROM user_form WHERE id = $id");
        $stmt->execute();
        $rows = $stmt->fetchAll();    
        foreach($rows as $row):
            echo $row['photo'];
        
    endforeach;
        }

    //     $query = "SELECT photo FROM user_form WHERE id = $id";

    //     $result = $this->db->query($query) or die($this->db->error) ;

    //     $user_data = $result->mysqli_fetch_array(MYSQLI_ASSOC);
    //     echo $user_data['photo'];
    // }
    

    public function get_stored_data($id, $column_name)
    {
        // $query = "SELECT * from  user_form WHERE id = '$id' ";
        // $results = $this->db->query($query) or die($this->connectionGet->errorCode()->error);
        // $row = mysqli_fetch_all($results);
        // return $row[$column_name];
        $stmt = $this->db->prepare("SELECT * from  user_form WHERE id = '$id'");
        $stmt->execute();
        $rows = $stmt->fetchAll();  
        // return $rows[$column_name];  
        foreach($rows as $row):
    //         // echo $row[$column_name];
            return  $row[$column_name];
        
    endforeach;
    
    }

    public function update_user_data($id, $identification_no, $first_name, $last_name, $rank, $address, $gender, $email, $phone, $region, $country, $user_type, $auto_password)
    {
    // $query = "SELECT * FROM  user_form  WHERE identification_no='$identification_no' and email='$email'";
    $stmt = $this->db->prepare("SELECT * FROM  user_form  WHERE identification_no='$identification_no' and email='$email'");
    // $result = $this->db->query($query) or die($this->db->error);
    $stmt->execute();
    $count_row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //if the username is not in db then insert to the table

        if (!$count_row > 0) {
            // $query = "UPDATE user_form set identification_no='" . trim(ucwords($_POST[$identification_no])) . "', first_name='" . trim(ucwords($_POST[$first_name])) . "', last_name='" . trim(ucwords($_POST[$last_name])) . "', rank='" . trim(ucwords($_POST[$rank])) . "' ,address='" . trim(ucwords($_POST[$address])) . "',gender='" . trim(ucwords($_POST[$gender])) . "', email='" . trim(($_POST[$email])) . "', phone='" . trim(ucwords($_POST[$phone])) . "', region='" . trim(ucwords($_POST[$region])) . "', country='" . trim(ucwords($_POST[$country])) . "', user_type='" . trim(ucwords($_POST[$user_type])) . "', auto_password='" . trim(ucwords($_POST[$auto_password])) . "' WHERE id= $id";
            $stmtt = $this->db->prepare("UPDATE user_form set identification_no='" . trim(ucwords($_POST[$identification_no])) . "', first_name='" . trim(ucwords($_POST[$first_name])) . "', last_name='" . trim(ucwords($_POST[$last_name])) . "', rank='" . trim(ucwords($_POST[$rank])) . "' ,address='" . trim(ucwords($_POST[$address])) . "',gender='" . trim(ucwords($_POST[$gender])) . "', email='" . trim(($_POST[$email])) . "', phone='" . trim(ucwords($_POST[$phone])) . "', region='" . trim(ucwords($_POST[$region])) . "', country='" . trim(ucwords($_POST[$country])) . "', user_type='" . trim(ucwords($_POST[$user_type])) . "', auto_password='" . trim(ucwords($_POST[$auto_password])) . "' WHERE id= $id");
            $stmtt->execute();
            // $result = $this->connectionGet->query($query) or die($this->db->error);
            // return $result;
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
            <strong>Data Updated</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>';
        }else{
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
            <strong>Data Not Updated</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>';
        }

    }
    private function isImage()
    {
        if (!in_array($this->image_temp, $this->allowed_image_types)) {
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
            <strong>Not Image, please try again!</strong> A problem has been occurred while submitting your data.
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
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
            <strong>Big File, please try again!</strong> A problem has been occurred while submitting your data.
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
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
       <strong>Not Stored, please try again!</strong> A problem has been occurred while submitting your data.
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
    }
    public function recordImage($id,$files,$previous)
    {
        $image_name = $files['new_photo']['name'];
        $image_temp = $files['new_photo']['tmp_name'];
        $error = $files['new_photo']['error'];
        $previous_post = $_POST[$previous];
        $exp = explode(".", $image_name);
        $end = end($exp);
        $path =  "img/".$image_name;
        $allowed_ext = array("gif", "jpg", "jpeg", "png");
        $this->isImage(); // Checking if the uploaded file is actually an image.
        $this->imageNameValidation(); // Sanitizing the images name.
        $this->sizeValidation(); // Validating the file size.
        $this->checkFile(); // Checking if the file exists in uploads folder.
        if ($this->error == null) {
            // moving the file from the temporary location to the uploads folder.
            $this->moveFile();
        }
        // $path="img/";
        // $sql="select * from user_form where id='$id'";
        // $result = mysqli_query($this->db, $sql);
        // if($result->num_rows > 0){
        //     foreach($result as $row)
        //     { 
        //         $file = $path.$row['photo'];
        //     }
        // }
            if (in_array($end, $allowed_ext)) {
                if(!(file_exists($previous_post))){
                    // unlink($previous_post);
                    move_uploaded_file($image_temp, $path);
                    // $query = "UPDATE `user_form` set `photo` = '$path' WHERE `id` = '$id'";
                    $stmt = $this->db->prepare("UPDATE `user_form` set `photo` = '$path' WHERE `id` = '$id'");
                    $stmt->execute();
                    // $resut = $this->db->query($query) or die($this->db->error);
                    return $this->error = '<div class="alert alert-success alert-dismissible fade show">
                    <strong>Succuss</strong>Data.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
                }else{
                    unlink($previous_post);
                    if (move_uploaded_file($image_temp, $path)) {
                        // $query = "UPDATE `user_form` set `photo` = '$path' WHERE `id` = '$id'";
                        $stmtt = $this->db->prepare("UPDATE `user_form` set `photo` = '$path' WHERE `id` = '$id'");
                        $stmtt->execute();
                        // $resut = $this->connectionGet->query($query) or die($this->db->error);
                        return $this->error = '<div class="alert alert-success alert-dismissible fade show">
                        <strong>Succuss</strong>Data.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>';
                    }  
                    }
                }
                else{
                    return $this->error ='<div class="alert alert-danger alert-dismissible fade show">
                    <strong>Unknown Error.</strong> A problem has been occurred while submitting your data.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
               }
                
                }
            
            
        
        

    public function deactivate_account($id){

            // $stmt = $this->db->prepare("SELECT email,auto_password FROM user_form WHERE email = '$email'");
            // $stmt->execute();
            // $result =  $stmt->fetchAll();
            // foreach($result as $row){
            //     if ($row['email'] == $email || $row['auto_password'] == $auto_password ) {
			$sql = "DELETE from $this->user_form where id=$id";
			$query = $this->db->query($sql);
			if ($query) {
                session_destroy();
                header("Location: Admin_Iogin.php");
			}else{
				return false;
			}
	// 	}
    // }
}
}