<?php 
include "Connection_Class.php";
class Register_new_user{
    public $identification;
    public $first;
    public $last;
    public $rank_;
    public $address_;
    public $gender_;
    public $email_;
    public $phone_;
    public $region_;
    public $country_;
    public $user_type_;
    protected $db;
    public $image_name;
    private $image_type;
    private $image_size;
    private $image_temp;
    private $upload_folder = "img/";
    private $upload_max_size  = 2*1024*1024;
    private $allowed_image_types = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
    public $error;
	 public $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";


    public function __construct($files,$identification_no,$first_name,$last_name,$rank,$address,$gender,$email,$phone,$region,$country,$user_type){
      
      $this->db = db::getInstance();

        $this->identification = $identification_no;
        $this->first = $first_name;
        $this->last = $last_name;
        $this->rank_ = $rank;
        $this->address_ = $address;
        $this->gender_ = $gender;
        $this->email_ = $email;
        $this->phone_ = $phone;
        $this->region_ = $region;
        $this->country_ = $country;
        $this->user_type_ = $user_type;
        $this->image_name = $files['photo']['name'];
        $this->image_size = $files['photo']['size'];
        $this->image_temp = $files['photo']['tmp_name'];
        $this->image_type = $files['photo']['type'];
        $this->isImage(); // Checking if the uploaded file is actually an image.
        $this->imageNameValidation(); // Sanitizing the images name.
        $this->sizeValidation(); // Validating the file size.
        $this->checkFile(); // Checking if the file exists in uploads folder.
        // If there is no error.
        if($this->error == null){
           // moving the file from the temporary location to the uploads folder.
           $this->moveFile();
        }
        // if there is no errors
        if($this->error == null){
           // Recording the images name in the database.
           $this->recordImage();
        }

    }

    private function isImage(){
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $this->image_temp);
        finfo_close($finfo);
        if(!in_array($mime, $this->allowed_image_types) ){
           return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
           <strong>This is not a valid image type!</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
     }

	private function imageNameValidation(){
	   return $this->image_name = filter_var($this->image_name, FILTER_SANITIZE_STRING);
	}

	private function sizeValidation(){
        if($this->image_size > $this->upload_max_size){
           return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
           <strong>File is bigger than 2MB!</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
     }


     private function checkFile(){
        if(file_exists($this->upload_folder.$this->image_name)){
           return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
           <strong>File already exists in folder!</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
     }

     private function moveFile(){
        if(!move_uploaded_file($this->image_temp, $this->upload_folder.$this->image_name)){
           return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
           <strong>There was an error, please try again!</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
     }
     private function recordImage(){
        
        $auto_password = substr( str_shuffle( $this->chars ), 0, 8 );
      	$path = "img/" . $this->image_name;
        $query = "SELECT * FROM  user_form  WHERE identification_no='$this->identification' OR email='$this->email_'";
		$result = $this->db->query($query) or die($this->db->error);
		$count_row = $result->num_rows;
        if($count_row == 0){
            $query = "INSERT INTO user_form SET identification_no='$this->identification',first_name='$this->first', last_name='$this->last', address='$this->address_',rank='$this->rank_',gender='$this->gender_',email = '$this->email_',phone='$this->phone_',photo='$path',region='$this->region_',country='$this->country_',user_type='$this->user_type_',auto_password='$auto_password'";
            
            $result = $this->db->query($query) or die($this->db->error);
            
            return $this->error = '<div class="alert alert-success alert-dismissible fade show">
            <strong>Success!</strong> Your message has been sent successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
        }
        else{return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
         <strong>Username Exsist, please try again!</strong> A problem has been occurred while submitting your data.
         <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
     </div>';}
        if($this->db->affected_rows != 1){
           if(file_exists($this->upload_folder.$this->image_name)){
              unlink($this->upload_folder.$this->image_name);
           }
           return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
           <strong>There was an error, please try again!</strong> A problem has been occurred while submitting your data.
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
       </div>';
        }
     }
// public function reg_user($identification_no,$first_name,$last_name,$rank,$address,$gender,$email,$phone,$photo,$region,$country,$user_type){
   
//     $auto_password = substr( str_shuffle( $chars ), 0, 8 );
//     // $password = md5($password);
    
//     //checking if the username or email is available in db
//     $query = "SELECT * FROM  user_form  WHERE identification_no='$identification_no' OR email='$email'";
    
//     $result = $this->db->query($query) or die($this->db->error);
    
//     $count_row = $result->num_rows;
    
//     //if the username is not in db then insert to the table
    
//     if($count_row == 0){
//         $query = "INSERT INTO user_form SET identification_no='$identification_no',first_name='$first_name', last_name='$last_name', address='$address',rank='$rank',gender='$gender',phone='$phone',photo='$photo',region='$region',country='$country',user_type='$user_type',auto_password='$auto_password'";
        
//         $result = $this->db->query($query) or die($this->db->error);
        
//         return true;
//     }
//     else{return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Username Exsist, please try again!</strong> A problem has been occurred while submitting your data.
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';}
    
    
//     }
    // public function check_login($email, $auto_password, $user_type){
    //     // $password = md5($password);
		
	// 	$query = "SELECT id from  user_form  WHERE email='$email' and auto_password='$auto_password' and user_type = '$user_type'";
		
	// 	$result = $this->db->query($query) or die($this->db->error);

		
	// 	$user_data = $result->fetch_array(MYSQLI_ASSOC);
	// 	$count_row = $result->num_rows;
		
	// 	if ($count_row == 1) {
	//             $_SESSION['login'] = true; // this login var will use for the session thing
	//             $_SESSION['id'] = $user_data['id'];
	//             return true;
	//         }
			
	// 	else{return false;}
		

	// }





}