<?php 
	include_once "singleton#1.php";
class Update_User_Data_Class
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
public function update_incident_reporter($document_no,$title, $first_name, $middel_name, $last_name, $phone, $address, $addressTwo, $city, $state, $zip_code)
    {
    // $query = "SELECT * FROM  incident_reporter  WHERE document_no='$document_no'";
    
    // $result = $this->db->query($query) or die($this->db->error);
    
    // $count_row = mysqli_fetch_row($result);


    
    //if the username is not in db then insert to the table

        // if (!$count_row > 0) {
            $query = "UPDATE incident_reporter set title='" . trim(ucwords($_POST[$title])) . "', first_name='" . trim(ucwords($_POST[$first_name])) . "', middel_name='" . trim(ucwords($_POST[$middel_name])) . "', last_name='" . trim(ucwords($_POST[$last_name])) . "' ,phone='" . trim(ucwords($_POST[$phone])) . "',address='" . trim(ucwords($_POST[$address])) . "', addressTwo='" . trim(($_POST[$addressTwo])) . "', city='" . trim(ucwords($_POST[$city])) . "', state='" . trim(ucwords($_POST[$state])) . "', zip_code='" . trim(ucwords($_POST[$zip_code])) . "' WHERE document_no = $document_no";
            $result = $this->db->query($query) or die($this->db->error);
            if( $result == true){
                return $this->error ='<div class="alert alert-success alert-dismissible fade show">
                <strong>succuss</strong>your data is updated.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>';
        }else{
            return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
            <strong>Error</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
        
            }
            }
              
        

    public function update_registeree($document_no,$rank,$identification_no, $first_name_registeree, $last_name_registeree,$crime_type,$incident_location, $nature_incident, $incident_details, $incident_motivated, $report_before, $arreseted)
    {
      


    // $query = "SELECT * FROM   registeree   WHERE identification_no='$identification_no'";
    
    // $res = $this->db->query($query) or die($this->db->error);
    $query = "SELECT * FROM   registeree   WHERE identification_no='$identification_no'";
    $res = $this->db->query($query);
    $crime_type = $_POST['crime_type'];
    $crimes=implode(',',$crime_type);
    
    $count_row = $res->fetchAll(PDO::FETCH_ASSOC);
    //if the username is not in db then insert to the table

        if (!$count_row > 0) {
            $query = "UPDATE registeree set rank='" . trim(ucwords($_POST[$rank])) . "', identification_no='" . trim(ucwords($_POST[$identification_no])) . "', first_name_registeree='" . trim(ucwords($_POST[$first_name_registeree])) . "', last_name_registeree='" . trim(ucwords($_POST[$last_name_registeree])) . "' , crime_type='" . trim(ucwords($crimes)) . "' ,incident_location='" . trim(ucwords($_POST[$incident_location])) . "',nature_incident='" . trim(ucwords($_POST[$nature_incident])) . "', incident_details='" . trim(($_POST[$incident_details])) . "', incident_motivated='" . trim(ucwords($_POST[$incident_motivated])) . "', report_before='" . trim(ucwords($_POST[$report_before])) . "', arreseted='" . trim(ucwords($_POST[$arreseted])) . "' WHERE document_no = $document_no";
            $res = $this->db->query($query) or die($this->db->error);
            if($res->rowCount()>0){
            return $this->error ='<div class="alert alert-success alert-dismissible fade show">
            <strong>succuss</strong> your data is updated..
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
    }
        }else
        { return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
        <strong>Unknown</strong> A problem has been occurred while submitting your data.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';
        }
    }
}