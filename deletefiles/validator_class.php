<?php

use validator as GlobalValidator;

include_once('View_Registered_Data_Class.php');
include_once('Update_Registered_Crime_Class.php');

class validator{
    public $error;


  public function checkIfUpated($id,array $posts,$tabel_name){  
    
    $students = new IncidentReporter;
    $suspected_person_detailes_class = new Update_Crime_Data_Class;
    $result = $students->indexWithSpecificId($id,$tabel_name);
    if($result)
    {
        foreach($result as $row){
            // echo $row;
            foreach($posts as $post){
                if($post != $row){
                    $update_suspected_person_detailes = $suspected_person_detailes_class->update_suspected_person_detailes_data($id,'first_name','middle_name','last_name','date_of_birth','marital_status','resident_address','city','state','phone','Id_document_type','hight','weight','eye_color','hair_color','emergency_phone');
                        return $this->error = $posts; 
                }
            }
        }
    }
//         foreach($result as $row => $value)
//         {
//             foreach($_POST as $key => $value){
// if($row == $key[$enter_values]){
//     $update_suspected_person_detailes = $suspected_person_detailes_class->update_suspected_person_detailes_data($id,'first_name','middle_name','last_name','date_of_birth','marital_status','resident_address','city','state','phone','Id_document_type','hight','weight','eye_color','hair_color','emergency_phone');
//     return $this->error = $value; 
// }else{
//     return $this->error = '<div class="alert alert-warning alert-dismissible fade show">
//     <strong>Nothing Updated!</strong> A problem has been occurred while submitting your data.
//     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>';
            }
        // if($row[$value] != $_POST[$value]){
           
        // }else{
        //     return $this->error = '<div class="alert alert-warning alert-dismissible fade show">
        //     <strong>Nothing Updated!</strong> A problem has been occurred while submitting your data.
        //     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        // </div>';
     }
       
//         }}

// }
// }
// $class = new GlobalValidator;
// print($class->checkIfUpated(1,))
?>