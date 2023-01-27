<?php 


include_once "singleton#1.php";

class DeleteData{

    protected $db;

    public $error;
    // protected $table_name;

public function __construct()
    {
        $this->db = DatabaseConnection::getInstance();
    }
    public function deactivate_account($table_name, $value_name){
        {
			$sql = "DELETE from $table_name where $value_name=$value_name";
			$query = $this->db->query($sql);
			if ($query) {
                session_destroy();
                header("Location: Admin_Iogin.php");
			}else{
				return false;
			}
		}
    }

    public function DeleteDataWithElemenet($table_one, $table_two ,$value_name)
    {

  $query = "DELETE FROM $table_one, $table_two 
  USING $table_one, $table_two 
  WHERE $table_two.document_no = $table_one.document_no AND $table_one.document_no = $value_name";
  $result = $this->db->query($query);
  if($result==true){
    $query = "DELETE FROM $table_two WHERE $value_name =$value_name ";
    return $this->error = '<div class="alert alert-success alert-dismissible fade show">
    <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  }else{
    return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
    <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  }
 
}
		// 	$sql = "DELETE $value_name, $value_name FROM $table_name, $table_name_two WHERE document_no = $value_name;";
		// 	$query = $this->db->query($sql);
        //     return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
        //     <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
        //     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        // </div>';
        public function DeleteData_CrimeForm($table_one, $table_two , $table_three,$value_name)
        {
    
      $query_one = "DELETE FROM $table_one, $table_two 
      USING $table_one, $table_two 
      WHERE $table_two.document_no = $table_one.document_no AND $table_one.document_no = $value_name";
      $result_one = $this->db->query($query_one);
      if($result_one==true){
        $query_two = "DELETE FROM $table_two WHERE $value_name =$value_name ";
        $result_two = $this->db->query($query_two);
        if($result_two == true){
          $query_three = "DELETE FROM $table_three WHERE $value_name =$value_name ";
        $this->db->query($query_three);
        }
        return $this->error = '<div class="alert alert-success alert-dismissible fade show">
        <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>';
      }else{
        return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
        <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>';
      }
     
    } 

    public function DeleteData_PoliceOfficersForm($table_one,$value_name)
    {

  $query= "DELETE FROM $table_one WHERE police_id = '$value_name' ";
  $result= $this->db->query($query);
    if($result == true){
      return $this->error = '<div class="alert alert-success alert-dismissible fade show">
      <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';
    }else{
    return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
    <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  }


 
} 


public function DeleteData_UserForm($table_one,$value_name)
{

$query= "DELETE FROM $table_one WHERE identification_no = $value_name ";
$result= $this->db->query($query);
if($result == true){
  return $this->error = '<div class="alert alert-success alert-dismissible fade show">
  <strong>Data Deleted</strong> A problem has been occurred while submitting your data.
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
}else{
return $this->error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Data Deleted</strong> A problem has been occurred while submitting your data.
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
}

} 

public function verifyFordeletion($email, $auto_password,$table_one, $table_two ,$value_name){


       
  // $query = "SELECT * from  $this->user_form  WHERE email='$email' and auto_password='$auto_password' and user_type = '$user_type'";
       $stmt = $this->db->prepare("SELECT email,auto_password FROM user_form WHERE email = '$email'");
       $stmt->execute();
       // $result = $this->db->query($query) or die($this->db->error);
       $result =  $stmt->fetchAll();
       foreach($result as $row){
           if ($row['email'] == $email || $row['auto_password'] == $auto_password ) {
            $this->DeleteDataWithElemenet($table_one,$table_two,$value_name);
            return $this->error 
            = "<html>
            <head>
              <link href='https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap' rel='stylesheet'>
            </head>
              <style>
                body {
                  text-align: center;
                  padding: 40px 0;
                  background: #EBF0F5;
                }
                  h1 {
                    color: #88B04B;
                    font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                    font-weight: 900;
                    font-size: 40px;
                    margin-bottom: 10px;
                  }
                  p {
                    color: #404F5E;
                    font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                    font-size:20px;
                    margin: 0;
                  }
                i {
                  color: #9ABC66;
                  font-size: 100px;
                  line-height: 200px;
                  margin-left:-15px;
                }
                .card {
                  background: white;
                  padding: 60px;
                  border-radius: 4px;
                  box-shadow: 0 2px 3px #C8D0D8;
                  display: inline-block;
                  margin: 0 auto;
                }
              </style>
              <body>
                <div class='card'>
                <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;''>
                  <i class='checkmark'>✓</i>
                </div>
                  <h1>Success</h1> 
                  <p>Data Deleted;<br/></p>
                </div>
              </body>
          </html>";
           }
          }
          return $this->error = "<html>
          <html>
          <head>
          <link href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round' rel='stylesheet'>
          <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
          <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
          <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
          <style>
              body {
              font-family: 'Varela Round', sans-serif;
            }
            .modal-confirm {		
              color: #636363;
              width: 325px;
              margin: 80px auto 0;
            }
            .modal-confirm .modal-content {
              padding: 20px;
              border-radius: 5px;
              border: none;
            }
            .modal-confirm .modal-header {
              border-bottom: none;   
                  position: relative;
            }
            .modal-confirm h4 {
              text-align: center;
              font-size: 26px;
              margin: 30px 0 -15px;
            }
            .modal-confirm .form-control, .modal-confirm .btn {
              min-height: 40px;
              border-radius: 3px; 
            }
            .modal-confirm .close {
                  position: absolute;
              top: -5px;
              right: -5px;
            }	
            .modal-confirm .modal-footer {
              border: none;
              text-align: center;
              border-radius: 5px;
              font-size: 13px;
            }	
            .modal-confirm .icon-box {
              color: #fff;		
              position: absolute;
              margin: 0 auto;
              left: 0;
              right: 0;
              top: -70px;
              width: 95px;
              height: 95px;
              border-radius: 50%;
              z-index: 9;
              background: #ef513a;
              padding: 15px;
              text-align: center;
              box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            }
            .modal-confirm .icon-box i {
              font-size: 56px;
              position: relative;
              top: 4px;
            }
              .modal-confirm .btn {
                  color: #fff;
                  border-radius: 4px;
              background: #ef513a;
              text-decoration: none;
              transition: all 0.4s;
                  line-height: normal;
                  border: none;
              }
            .modal-confirm .btn:hover, .modal-confirm .btn:focus {
              background: #da2c12;
              outline: none;
            }
            .trigger-btn {
              display: inline-block;
              margin: 100px auto;
            }
          </style>
          </head>
          <body>
            <div class='modal-dialog modal-confirm'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <div class='icon-box'>
                    <i class='material-icons'>&#xE5CD;</i>
                  </div>				
                  <h4 class='modal-title'>Wrong Credential!</h4>	
                </div>
                <div class='modal-body'>
                  <p class='text-center'>Your Email or Password is Incorrect. Please go back and try again.</p>
                </div>
                
              </div>
            </div>
          </div>     
          </body>
          </html>";                     
        
          
}

public function verifyFordeletionCrime($email, $auto_password,$table_one, $table_two , $table_three,$value_name){


       
  // $query = "SELECT * from  $this->user_form  WHERE email='$email' and auto_password='$auto_password' and user_type = '$user_type'";
       $stmt = $this->db->prepare("SELECT email,auto_password FROM user_form WHERE email = '$email'");
       $stmt->execute();
       // $result = $this->db->query($query) or die($this->db->error);
       $result =  $stmt->fetchAll();
       foreach($result as $row){
           if ($row['email'] == $email || $row['auto_password'] == $auto_password ) {
            $this->DeleteData_CrimeForm($table_one,$table_two, $table_three,$value_name);
            return $this->error 
            = "<html>
            <head>
              <link href='https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap' rel='stylesheet'>
            </head>
              <style>
                body {
                  text-align: center;
                  padding: 40px 0;
                  background: #EBF0F5;
                }
                  h1 {
                    color: #88B04B;
                    font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                    font-weight: 900;
                    font-size: 40px;
                    margin-bottom: 10px;
                  }
                  p {
                    color: #404F5E;
                    font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                    font-size:20px;
                    margin: 0;
                  }
                i {
                  color: #9ABC66;
                  font-size: 100px;
                  line-height: 200px;
                  margin-left:-15px;
                }
                .card {
                  background: white;
                  padding: 60px;
                  border-radius: 4px;
                  box-shadow: 0 2px 3px #C8D0D8;
                  display: inline-block;
                  margin: 0 auto;
                }
              </style>
              <body>
                <div class='card'>
                <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;''>
                  <i class='checkmark'>✓</i>
                </div>
                  <h1>Success</h1> 
                  <p>Data Deleted;<br/></p>
                </div>
              </body>
          </html>";
           }
          }
          return $this->error = "<html>
          <html>
          <head>
          <link href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round' rel='stylesheet'>
          <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
          <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
          <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
          <style>
              body {
              font-family: 'Varela Round', sans-serif;
            }
            .modal-confirm {		
              color: #636363;
              width: 325px;
              margin: 80px auto 0;
            }
            .modal-confirm .modal-content {
              padding: 20px;
              border-radius: 5px;
              border: none;
            }
            .modal-confirm .modal-header {
              border-bottom: none;   
                  position: relative;
            }
            .modal-confirm h4 {
              text-align: center;
              font-size: 26px;
              margin: 30px 0 -15px;
            }
            .modal-confirm .form-control, .modal-confirm .btn {
              min-height: 40px;
              border-radius: 3px; 
            }
            .modal-confirm .close {
                  position: absolute;
              top: -5px;
              right: -5px;
            }	
            .modal-confirm .modal-footer {
              border: none;
              text-align: center;
              border-radius: 5px;
              font-size: 13px;
            }	
            .modal-confirm .icon-box {
              color: #fff;		
              position: absolute;
              margin: 0 auto;
              left: 0;
              right: 0;
              top: -70px;
              width: 95px;
              height: 95px;
              border-radius: 50%;
              z-index: 9;
              background: #ef513a;
              padding: 15px;
              text-align: center;
              box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            }
            .modal-confirm .icon-box i {
              font-size: 56px;
              position: relative;
              top: 4px;
            }
              .modal-confirm .btn {
                  color: #fff;
                  border-radius: 4px;
              background: #ef513a;
              text-decoration: none;
              transition: all 0.4s;
                  line-height: normal;
                  border: none;
              }
            .modal-confirm .btn:hover, .modal-confirm .btn:focus {
              background: #da2c12;
              outline: none;
            }
            .trigger-btn {
              display: inline-block;
              margin: 100px auto;
            }
          </style>
          </head>
          <body>
            <div class='modal-dialog modal-confirm'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <div class='icon-box'>
                    <i class='material-icons'>&#xE5CD;</i>
                  </div>				
                  <h4 class='modal-title'>Wrong Credential!</h4>	
                </div>
                <div class='modal-body'>
                  <p class='text-center'>Your Email or Password is Incorrect. Please go back and try again.</p>
                </div>
                
              </div>
            </div>
          </div>     
          </body>
          </html>";                     
        
          
}


public function verifyFordeletionPoliceOfficer($email, $auto_password,$table_one,$value_name){


       
  // $query = "SELECT * from  $this->user_form  WHERE email='$email' and auto_password='$auto_password' and user_type = '$user_type'";
       $stmt = $this->db->prepare("SELECT email,auto_password FROM user_form WHERE email = '$email'");
       $stmt->execute();
       // $result = $this->db->query($query) or die($this->db->error);
       $result =  $stmt->fetchAll();
       foreach($result as $row){
           if ($row['email'] == $email || $row['auto_password'] == $auto_password ) {
            $this->DeleteData_PoliceOfficersForm($table_one,$value_name);
            return $this->error 
            = "<html>
            <head>
              <link href='https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap' rel='stylesheet'>
            </head>
              <style>
                body {
                  text-align: center;
                  padding: 40px 0;
                  background: #EBF0F5;
                }
                  h1 {
                    color: #88B04B;
                    font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                    font-weight: 900;
                    font-size: 40px;
                    margin-bottom: 10px;
                  }
                  p {
                    color: #404F5E;
                    font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                    font-size:20px;
                    margin: 0;
                  }
                i {
                  color: #9ABC66;
                  font-size: 100px;
                  line-height: 200px;
                  margin-left:-15px;
                }
                .card {
                  background: white;
                  padding: 60px;
                  border-radius: 4px;
                  box-shadow: 0 2px 3px #C8D0D8;
                  display: inline-block;
                  margin: 0 auto;
                }
              </style>
              <body>
                <div class='card'>
                <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;''>
                  <i class='checkmark'>✓</i>
                </div>
                  <h1>Success</h1> 
                  <p>Data Deleted;<br/></p>
                </div>
              </body>
          </html>";
           }
          }
            
            return $this->error = "<html>
            <html>
            <head>
            <link href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round' rel='stylesheet'>
            <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
            <style>
                body {
                font-family: 'Varela Round', sans-serif;
              }
              .modal-confirm {		
                color: #636363;
                width: 325px;
                margin: 80px auto 0;
              }
              .modal-confirm .modal-content {
                padding: 20px;
                border-radius: 5px;
                border: none;
              }
              .modal-confirm .modal-header {
                border-bottom: none;   
                    position: relative;
              }
              .modal-confirm h4 {
                text-align: center;
                font-size: 26px;
                margin: 30px 0 -15px;
              }
              .modal-confirm .form-control, .modal-confirm .btn {
                min-height: 40px;
                border-radius: 3px; 
              }
              .modal-confirm .close {
                    position: absolute;
                top: -5px;
                right: -5px;
              }	
              .modal-confirm .modal-footer {
                border: none;
                text-align: center;
                border-radius: 5px;
                font-size: 13px;
              }	
              .modal-confirm .icon-box {
                color: #fff;		
                position: absolute;
                margin: 0 auto;
                left: 0;
                right: 0;
                top: -70px;
                width: 95px;
                height: 95px;
                border-radius: 50%;
                z-index: 9;
                background: #ef513a;
                padding: 15px;
                text-align: center;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
              }
              .modal-confirm .icon-box i {
                font-size: 56px;
                position: relative;
                top: 4px;
              }
                .modal-confirm .btn {
                    color: #fff;
                    border-radius: 4px;
                background: #ef513a;
                text-decoration: none;
                transition: all 0.4s;
                    line-height: normal;
                    border: none;
                }
              .modal-confirm .btn:hover, .modal-confirm .btn:focus {
                background: #da2c12;
                outline: none;
              }
              .trigger-btn {
                display: inline-block;
                margin: 100px auto;
              }
            </style>
            </head>
            <body>
              <div class='modal-dialog modal-confirm'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <div class='icon-box'>
                      <i class='material-icons'>&#xE5CD;</i>
                    </div>				
                    <h4 class='modal-title'>Wrong Credential!</h4>	
                  </div>
                  <div class='modal-body'>
                    <p class='text-center'>Your Email or Password is Incorrect. Please go back and try again.</p>
                  </div>
                  
                </div>
              </div>
            </div>     
            </body>
            </html>";                     
          
            }


            public function verifyFordeletionAssignedUsers($email, $auto_password,$table_one,$value_name){


       
              // $query = "SELECT * from  $this->user_form  WHERE email='$email' and auto_password='$auto_password' and user_type = '$user_type'";
                   $stmt = $this->db->prepare("SELECT email,auto_password FROM user_form WHERE email = '$email'");
                   $stmt->execute();
                   // $result = $this->db->query($query) or die($this->db->error);
                   $result =  $stmt->fetchAll();
                   foreach($result as $row){
                       if ($row['email'] == $email || $row['auto_password'] == $auto_password ) {
                        $this->DeleteData_UserForm($table_one,$value_name);
                        return $this->error 
                        = "<html>
                        <head>
                          <link href='https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap' rel='stylesheet'>
                        </head>
                          <style>
                            body {
                              text-align: center;
                              padding: 40px 0;
                              background: #EBF0F5;
                            }
                              h1 {
                                color: #88B04B;
                                font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                                font-weight: 900;
                                font-size: 40px;
                                margin-bottom: 10px;
                              }
                              p {
                                color: #404F5E;
                                font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                                font-size:20px;
                                margin: 0;
                              }
                            i {
                              color: #9ABC66;
                              font-size: 100px;
                              line-height: 200px;
                              margin-left:-15px;
                            }
                            .card {
                              background: white;
                              padding: 60px;
                              border-radius: 4px;
                              box-shadow: 0 2px 3px #C8D0D8;
                              display: inline-block;
                              margin: 0 auto;
                            }
                          </style>
                          <body>
                            <div class='card'>
                            <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;''>
                              <i class='checkmark'>✓</i>
                            </div>
                              <h1>Success</h1> 
                              <p>Data Deleted;<br/></p>
                            </div>
                          </body>
                      </html>";
                       }
                      }
                        
                        return $this->error = "<html>
                        <html>
                        <head>
                        <link href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round' rel='stylesheet'>
                        <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
                        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
                        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
                        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                        <style>
                            body {
                            font-family: 'Varela Round', sans-serif;
                          }
                          .modal-confirm {		
                            color: #636363;
                            width: 325px;
                            margin: 80px auto 0;
                          }
                          .modal-confirm .modal-content {
                            padding: 20px;
                            border-radius: 5px;
                            border: none;
                          }
                          .modal-confirm .modal-header {
                            border-bottom: none;   
                                position: relative;
                          }
                          .modal-confirm h4 {
                            text-align: center;
                            font-size: 26px;
                            margin: 30px 0 -15px;
                          }
                          .modal-confirm .form-control, .modal-confirm .btn {
                            min-height: 40px;
                            border-radius: 3px; 
                          }
                          .modal-confirm .close {
                                position: absolute;
                            top: -5px;
                            right: -5px;
                          }	
                          .modal-confirm .modal-footer {
                            border: none;
                            text-align: center;
                            border-radius: 5px;
                            font-size: 13px;
                          }	
                          .modal-confirm .icon-box {
                            color: #fff;		
                            position: absolute;
                            margin: 0 auto;
                            left: 0;
                            right: 0;
                            top: -70px;
                            width: 95px;
                            height: 95px;
                            border-radius: 50%;
                            z-index: 9;
                            background: #ef513a;
                            padding: 15px;
                            text-align: center;
                            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
                          }
                          .modal-confirm .icon-box i {
                            font-size: 56px;
                            position: relative;
                            top: 4px;
                          }
                            .modal-confirm .btn {
                                color: #fff;
                                border-radius: 4px;
                            background: #ef513a;
                            text-decoration: none;
                            transition: all 0.4s;
                                line-height: normal;
                                border: none;
                            }
                          .modal-confirm .btn:hover, .modal-confirm .btn:focus {
                            background: #da2c12;
                            outline: none;
                          }
                          .trigger-btn {
                            display: inline-block;
                            margin: 100px auto;
                          }
                        </style>
                        </head>
                        <body>
                          <div class='modal-dialog modal-confirm'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <div class='icon-box'>
                                  <i class='material-icons'>&#xE5CD;</i>
                                </div>				
                                <h4 class='modal-title'>Wrong Credential!</h4>	
                              </div>
                              <div class='modal-body'>
                                <p class='text-center'>Your Email or Password is Incorrect. Please go back and try again.</p>
                              </div>
                              
                            </div>
                          </div>
                        </div>     
                        </body>
                        </html>";                     
                      
                        }
          
}

		