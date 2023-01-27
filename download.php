<?php


include_once "classes/Delete_Class.php";
$db = DatabaseConnection::getInstance();
if(isset($_GET['id'])){
        $fileName = $_GET['id']; 
        $filePath = 'evidence/'.$_GET['id']; 
         
        if(!empty($fileName) && file_exists($filePath)){ 
            // Define headers 
            header("Cache-Control: public"); 
            header("Content-Description: File Transfer"); 
            header("Content-Disposition: attachment; filename=$fileName"); 
            header("Content-Type: application/zip"); 
            header("Content-Transfer-Encoding: binary"); 
             
            // Read the file 
            readfile($filePath); 
            exit; 
        }else{ 
            echo '
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/bootstrap.css">
        
            <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
            <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
            <link rel="stylesheet" href="assets/css/app.css">
            <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
            <center>
            <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img src="assets/images/samples/no_image_card.png" class="card-img-top img-fluid"
                        alt="singleminded">
                    <div class="card-body">
                    <a href="Manage_Registered_Data.php"> <h5 class="card-title">Back</h5></a>
                    </div>
                </div>
            </div>
        </div></center>'; 
        
    }
   

    
      
}
?>