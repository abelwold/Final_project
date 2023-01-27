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
include_once 'classes/Register_New_User_From_Inside_Class.php';
// include_once "singleton#1.php";
$db = DatabaseConnection::getInstance();

// try {
    
    if((isset($_POST['submit'])))
    {
       
        $inputData = [
            'identification_no' => $db,$_POST['identification_no'],
            'first_name' => $db,$_POST['first_name'],
            'last_name' => $db,$_POST['last_name'],
            'rank' => $db,$_POST['rank'],
            'address' => $db,$_POST['address'],
            'gender' => $db,$_POST['gender'],
            'email' => $db,$_POST['email'],
            'phone' => $db,$_POST['phone'],
            'region' => $db,$_POST['region'],
            'country' => $db,$_POST['country'],
            'date_of_birth' => $db,$_POST['date_of_birth'],
            'user_type' => $db,$_POST['user_type'],
        ];
    
        $object = new Register_New_User_From_Inside;
        $result = $object->storeNewUserFromInside($_POST,$_FILES,$inputData);
        
            
    }

include 'sidebar.php';

?>


<div id="main">
<html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
	<!--  If you want to help us go here https://www.bootdey.com/help-us -->
    <title>bs5 edit profile account details - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
                <p class="error"><?php echo @$object->error; ?></p>
    <!-- Account page navigation-->
    <!-- <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>
    </nav> -->
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="https://cdn-icons-png.flaticon.com/512/4727/4727424.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <input class="btn btn-primary" name="photo" type="file">
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
                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter your Email" >
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="identification_no">ID_No.</label>
                            <input class="form-control" id="identification_no" type="text" placeholder="Enter your identification_no" name="identification_no">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                                <label class="small mb-1" for="first_name">First name</label>
                                <input class="form-control" id="first_name" type="text" placeholder="Enter your first name" name="first_name">
                            </div>
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="last_name">last_name</label>
                                <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Enter your last_name" >
                            </div>

                            <div class="col-md-6">
                            <label class="small mb-1" for="rank">Rank</label>
                                <fieldset class="form-group">
                                                    <select class="form-select"  name="rank" id="rank">
                                                    <option disabled="disabled" selected="selected">Choose option</option>
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
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                           
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="address">Address</Address></label>
                                <input class="form-control" id="address" type="text" placeholder="Enter your location" name="address">
                            </div>

                            <div class="col-md-6">
                            <label class="small mb-1" for="gender">Gender</label>
                            <fieldset class="form-group">
                                                    <select class="form-select"  name="gender" id="gender">
                                                    <option disabled="disabled" selected="selected">Choose option</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    </select>
                                                   
                                                </fieldset> 
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
                                <input class="form-control" id="phone" type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="Enter your phone number" name="phone">
                            </div>
                            <small>Format: 911111111</small>

                            <div class="col-md-6">
                                <label class="small mb-1" for="date_of_birth">Birthday</label>
                                <input class="form-control" id="date_of_birth" type="date" name="date_of_birth" placeholder="Enter your birthday" >
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="region">Region</label>
                               
                                <fieldset class="form-group">
                                                    <select class="form-select" name="region" id="region">
                                                    <option value=""></option>
                                                   
                                < <option value="Tigray" >Tigray</option>
                        <option value="Afar" >Afar</option>
                        <option value="Amhara" >Amhara</option>
                        <option value="Oromia" >Oromia</option>
                        <option value="Somali" >Somali</option>
                        <option value="Benishangul-Gumuz" >Benishangul-Gumuz</option>
                        <option value="Southern Nations" >Southern Nations</option>
                        <option value="Nationalities and Peoples Region (SNNPR)" >Nationalities and Peoples Region (SNNPR)</option>
                        <option value="Gambella" >Gambella</option>
                        <option value="Harari " >Harari </option>
                        <option value="Addis Ababa" >Addis Ababa</option>
                        <option value="Dire Dawa" >Dire Dawa</option>
                                                    </select>
                                                    
                                                </fieldset>  
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="country">Country</label>
                                <input class="form-control" id="country" type="text" name="country" placeholder="Enter your country">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="user_type">User Type</label>
                                <fieldset class="form-group">
                                                    <select class="form-select"  name="user_type" id="user_type">
                                                    <option disabled="disabled" selected="selected">Choose option</option>
                                                    <option value="Adminstrator">Adminstrator</option>
                                                    <option value="User">User</option>
                                                    </select>
                                                
                                                </fieldset>                            </div>
                        </div>
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