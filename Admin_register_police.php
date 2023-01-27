<!--<link rel="stylesheet" href="style3.css">-->
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
include_once 'classes/Register_New_User_Class.php';
if (isset($_POST['submit'])){
        extract($_POST);
if($_FILES['photo']['error']==0){
    $register = new Register_new_user($_FILES,$identification_no,$first_name, $last_name, $rank,$address,$gender,$email,$phone,$region,$country,$user_type);
       
}
    }

include 'sidebar.php';

?>

<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Register Users</h3>
                            <p class="text-subtitle text-muted">To Register User, please provide the following information's</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Register Users</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            <form class="form form-vertical" enctype="multipart/form-data" method="POST" action="">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <input type="file" name="photo" class="form-control">
            </div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">User  Registeration</h4>
                </div>
                       <p class="error"><?php echo @$register->error;?></p>
                <div class="row ">
                    <div class="col-md-6 mt-4">
                    <label for="last-name-icon">Rank</label>
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
                                                    </select>
                                                    <p><small class="text-muted">Mr/Ms/Mrs.</small>
                                                </fieldset>  
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Identification No.</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="identification_no" placeholder="Identification No." id="Identification No.">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <p><small class="text-muted">Identification No.</small>
                                </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">First Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name" id="first_name">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                         </div>
                                    </div>
                                    <p><small class="text-muted">First Name</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Last Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="last_name">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                         </div>
                                    </div>
                                    <p><small class="text-muted">Last Name</small>
                                </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group has-icon-left">
                        <label  for="last-name-icon" >Mobile Number</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone number..." value="">
                        <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                         </div>
                        </div>
                         <p><small class="text-muted">Mobile Number</small>
                                </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group has-icon-left">
                        <label  for="last-name-icon" >Email</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="email" placeholder="Enter Email..." value="">
                        <div class="form-control-icon">
                        <i class="bi bi-email"></i>
                         </div>
                        </div>
                         <p><small class="text-muted">Email</small>
                                </div>
                    </div>
                    <div class="col-md-6 ">
                    <div class="form-group has-icon-left">
                        <label  for="last-name-icon" >Address</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="address" placeholder="Enter Address..." value="">
                        <div class="form-control-icon">
                        <i class="bi bi-map"></i>
                         </div>
                        </div>
                         <p><small class="text-muted">Address</small>
                                </div>
                    </div>
                    <div class="col-md-6">
                    <label for="last-name-icon">Gender</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="gender" id="gender">
                                                    <option disabled="disabled" name="rank" selected="selected">Choose option</option>
                                                   
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                                    </select>
                                                    <p><small class="text-muted">Male/Female</small>
                                                </fieldset>  
                    </div>

                   <div class="col-md-6">
                    <label for="last-name-icon">User Type</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="user_type" id="basicSelect">
                                                    <option disabled="disabled" name="rank" selected="selected">Choose option</option>
                                                   
                                <option value="Adminstrator">Adminstrator</option>
                                <option value="User">User</option>
                                                    </select>
                                                    <p><small class="text-muted">Adminstrator/User</small>
                                                </fieldset>  
                    </div>
                    <div class="col-md-6">
                    <label for="last-name-icon">State/Region</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="region" id="basicSelect">
                                                    <option disabled="disabled" name="rank" selected="selected">Choose option</option>
                                                   
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
                                                    <p><small class="text-muted">State/Region</small>
                                                </fieldset>  
                    </div>
                    <div class="col-md-6 ">
                    <div class="form-group has-icon-left">
                    
                        <label class="labels">Country</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="country" placeholder="Enter Country..." value="">
                        <div class="form-control-icon">
                        <i class="bi bi-globe"></i>
                         </div>
                        </div>
                         <p><small class="text-muted">Country</small>
                                </div>
                    </div>
</div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit" name="submit">Save Profile</button>
                    <button class="btn btn-primary profile-button" type="reset">Cancel</button>
            </div>
               
            </div>
        </div>
       
    </div>
</div>
</div>
</div>
</form>