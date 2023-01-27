<?php 
session_start();
include_once 'classes/Login_Class.php';
$user = new Login();
if(empty($_SESSION))
{
  header("location:Admin_Iogin.php");
}
else
{
print_r($_SESSION['login_admin']);
$id = $_SESSION['id'];
$user->get_session_admin($id);
}
include_once('classes/View_Registered_Data_Class.php');
include_once 'classes/Update_Registered_Users_Class.php';
$user = new Update_Registered_Users_Data_Class;
$rank_error = $gender_error = $user_type_error =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["rank"]) or empty($_POST['gender']) or empty($_POST['user_type']) ) {
      $rank_error = '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Required Rank Field</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
      $gender_error = '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Required Gender Field</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  $user_type_error = '<div class="alert alert-danger alert-dismissible fade show">
  <strong>Required User Type Field</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
    } else {
        if (isset($_POST['submit'])) {
            $user->update_user_data($_GET['id'],'identification_no','first_name','last_name','rank','address','gender','email','phone','region','country','date_of_birth','user_type','auto_password'); 
            $id = $_GET['id'];
                                      $stmt = DatabaseConnection::getInstance()->prepare("SELECT photo FROM  user_form  WHERE identification_no ='$id'");
                                      $stmt->execute();
                                      $result = $stmt->fetchAll();
                                      foreach($result as $key){
                                        if(isset($_POST['submit'])){
                                            if($key['photo'] != $_POST['previous_photo'])
                                            $user->UpdateImage_previous_photo($_GET['id'],$_FILES,'previous_photo');
                                        }
            
            // echo '<meta http-equiv="refresh" content="5;url=Manage_Registered_Users.php">';
        }
    } 
}
}
include 'sidebar.php';

?>


<div id="main">
<html>
<html lang="en">
<head>
    

    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</head>
<body>
<div class="container-xl px-4 mt-4">
<form action="" method="post" enctype="multipart/form-data">
<div class="card-heading">
                    <h2 class="title">User Registration Form</h2>
                </div>
                <p class="error"><?php echo @$user->error; ?></p>

    <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificIdUsers($_GET['id'],'user_form');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="<?=$row['photo'];?>" alt="">
                    <!-- Profile picture help block-->
                    <input type="hidden" name="previous_photo" id="previous_photo" value="<?=$row['photo'];?>"/>
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <div class="card-header">Change Profile Picture</div>
                    <input type="file" name="previous_photo" id="previous_photo" class="btn btn-primary">
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                   
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="text" value="<?=$row['email'];?>" >
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="identification_no">ID_No.</label>
                            <input class="form-control" id="identification_no" type="text" value="<?=$row['identification_no'];?>" name="identification_no">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                                <label class="small mb-1" for="first_name">First name</label>
                                <input class="form-control" id="first_name" type="text" value="<?=$row['first_name'];?>" name="first_name">
                            </div>
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="last_name">last_name</label>
                                <input class="form-control" id="last_name" name="last_name" type="text" value="<?=$row['last_name'];?>" >
                            </div>

                            <div class="col-md-6">
                            <label class="small mb-1" for="rank">Rank</label>
                                <fieldset class="form-group">
                                                    <select class="form-select"  name="rank" id="rank">
                                                    <option disabled="disabled" selected="selected"><?=$row['rank'];?></option>
                                                    <option value="Constable">Constable</option>
                                <option value="Assistant Sergeant">Assistant Sergeant</option>
                                <option value="Deputy Sergeant">Deputy Sergeant</option>
                                <option value="Sergeant">Sergeant</option>
                                <option value="Chief Sergeant">Chief Sergeant</option>
                                <option value="Assistant Inspector">Assistant Inspector</option>
                                <option value="Deputy Inspector">Deputy Inspector</option>
                                <option value="Inspector">Inspector</option>
                                <option value="Chief Inspector">Chief Inspector</option>
                                <option value="Deputy Commander">Deputy Commander</option>
                                <option value="Commander">Commander</option>
                                <option value="Assistant Commissioner">Assistant Commissioner</option>
                                <option value="Deputy Commissioner">Deputy Commissioner</option>
                                <option value="Commissioner">Commissioner</option>
                                <option value="Deputy Commissioner General">Deputy Commissioner General</option>
                                <option value="Commissioner General">Commissioner General</option>
                                <option value="Other">Other</option>
                                                    </select>
                                                   
                                                </fieldset>  
                                                <span class="error" style="color: red;"><?php echo $rank_error;?></span>
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                           
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="address">Address</Address></label>
                                <input class="form-control" id="address" type="text" value="<?=$row['address'];?>" name="address">
                            </div>

                            <div class="col-md-6">
                            <label class="small mb-1" for="gender">Gender</label>
                            <fieldset class="form-group">
                                                    <select class="form-select"  name="gender" id="gender">
                                                    <option disabled="disabled" selected="selected"><?=$row['gender'];?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    </select>
                                                   
                                                </fieldset> 
                                                <span class="error" style="color: red;"><?php echo $gender_error;?></span>
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-1">
                              
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="phone">Phone number</label>
                                <input class="form-control" id="phone" type="text" value="<?=$row['phone'];?>" name="phone">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="date_of_birth">Birthday</label>
                                <input class="form-control" id="date_of_birth" type="text" name="date_of_birth" value="<?=$row['date_of_birth'];?>" >
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="region">region</label>
                                <input class="form-control" id="region" type="text" name="region" value="<?=$row['region'];?>" >
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="country">country</label>
                                <input class="form-control" id="country" type="text" name="country" value="<?=$row['country'];?>">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="user_type">User Type</label>
                                <fieldset class="form-group">
                                                    <select class="form-select"  name="user_type" id="user_type">
                                                    <option disabled="disabled" selected="selected"><?=$row['user_type'];?></option>
                                                    <option value="Adminstrator">Adminstrator</option>
                                                    <option value="User">User</option>
                                                    </select>
                                                
                                                </fieldset>   
                                                <span class="error" style="color: red;"><?php echo $user_type_error;?></span>                         </div>
                                                <div class="col-md-6">
                                <label class="small mb-1" for="auto_password">Password</label>
                                <input class="form-control" id="auto_password" type="password" name="auto_password" value="<?=$row['auto_password'];?>">
                            </div>
                        </div>
                        
                        <?php } } ?>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit" name="submit">Register</button>
                        <button class="btn btn-primary" type="reset" >Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>