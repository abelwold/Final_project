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
include_once('classes/singleton#1.php');
include_once('classes/Update_Registered_Police_Officer_Class.php');

$user = new Update_Police_Officer_Data_Class;

$rank_error = $gender_error = $previously_registered_station_error = $currently_registered_station_error = $state_error =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["rank"]) or empty($_POST['gender']) or empty($_POST['previously_registered_station']) or empty($_POST['currently_registered_station']) or empty($_POST['state']) ) {
      $rank_error = '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Required Rank Field</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
      $gender_error = '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Required Gender Field</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  $previously_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
  <strong>Required Previously Registered Station Field</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$currently_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Required Currently Registered Station Field</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$state_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Required State Field</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
    } else {
        if (isset($_POST['submit'])) {
            $id = $_GET['id']; 
            $user->update_registered_police_officers($_GET['id'],'police_id','first_name','middle_name','last_name','date_of_birth','gender','nationality','address','country','city','state','phone','email','previously_registered_station','currently_registered_station','rank','position','date_join_police'); 
            $id = $_GET['id'];
                                      $stmt = DatabaseConnection::getInstance()->prepare("SELECT photo FROM  register_police_officer  WHERE police_id ='$id'");
                                      $stmt->execute();
                                      $result = $stmt->fetchAll();
                                      foreach($result as $key){
                                        if(isset($_POST['submit'])){
                                            if($key['photo'] != $_POST['previous_photo'])
                                            $user->UpdateImage_previous_police_officer_photo($_GET['id'],$_FILES,'previous_photo');
                                        }
                                      }

            echo '<meta http-equiv="refresh" content="3;url=Manage_Registerd_Police_Officers.php">';
        }
    } 
}

include 'sidebar.php';

?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>

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
                            <h3>Register Police Officer</h3>
                            <p class="text-subtitle text-muted">To Register Police Officer, please provide the following information's</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Register Police Officer</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <p class="error"><?php echo @$user->error; ?></p>
                <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificIdPolice($_GET['id'],'register_police_officer');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
            <form class="form form-vertical" enctype="multipart/form-data" method="POST" action="">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
      
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-3" width="100px" src="<?=$row['photo']?>" style="height: 150px; width:150px;" >
                <input type="hidden" name="previous_photo" id="previous_photo"  value="<?=$row['photo']?>"/>
                <input type="file" name="previous_photo" id="previous_photo" class="btn btn-primary">
            </div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"> Police Officer Registration Form</h4>
                </div>

                     
                      
                <div class="row ">
                    <div class="col-md-6 mt-4">
                    <label for="last-name-icon">Rank</label>
                    <fieldset class="form-group">
                                                    <select class="form-select"  name="rank" id="rank">
                                                    <option disabled="disabled" selected="selected"><?=$row['rank']?></option>
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
                                                <span class="error" style="color: red;"><?php echo $rank_error;?></span>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Identification No.</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="police_id" placeholder="Identification No." id="police_id" value="<?=$row['police_id']?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <p><small class="text-muted">Identification No.</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Position</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="position" placeholder="Position" id="position" value="<?=$row['position']?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <p><small class="text-muted">Position</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Date for join Police Academy</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" name="date_join_police" placeholder="Date for join Police Academy" id="date_join_police" value="<?=$row['date_join_police']?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <p><small class="text-muted">Date for join Police Academy</small>
                                </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">First Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name" id="first_name" value="<?=$row['first_name']?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                         </div>
                                    </div>
                                    <p><small class="text-muted">First Name</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Middle Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Middle Name" name="middle_name" id="middle_name" value="<?=$row['middle_name']?>">
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
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="last_name" value="<?=$row['last_name']?>">
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
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone number..." value="<?=$row['phone']?>">
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
                        <input type="text" class="form-control" name="email" placeholder="Enter Email..." value="<?=$row['email']?>">
                        <div class="form-control-icon">
                        <i class="bi bi-email"></i>
                         </div>
                        </div>
                         <p><small class="text-muted">Email</small>
                                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Date of Birth</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" name="date_of_birth" placeholder="Date for join Police Academy" id="date_of_birth" value="<?=$row['date_of_birth']?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <p><small class="text-muted">Date for join Police Academy</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Nationality</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="nationality" placeholder="Date for join Police Academy" id="nationality" value="<?=$row['nationality']?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <p><small class="text-muted">Date for join Police Academy</small>
                                </div>
                </div>
                    <div class="col-md-6 ">
                    <div class="form-group has-icon-left">
                        <label  for="last-name-icon" >Address</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="address" placeholder="Enter Address..." value="<?=$row['address']?>">
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
                                                    <option disabled="disabled" selected="selected"><?=$row['gender']?></option>
                                                   
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                                    </select>
                                                    <p><small class="text-muted">Male/Female</small>
                                                </fieldset>  
                                                <span class="error" style="color: red;"><?php echo $gender_error;?></span>
                    </div>
                    <div class="col-md-6 ">
                    <div class="form-group has-icon-left">
                        <label  for="last-name-icon" >City</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="city" placeholder="Enter City..." value="<?=$row['city']?>">
                        <div class="form-control-icon">
                        <i class="bi bi-map"></i>
                         </div>
                        </div>
                         <p><small class="text-muted">City</small>
                                </div>
                    </div>
                   <div class="col-md-6">
                    <label for="last-name-icon">Previous Police Station</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="previously_registered_station" id="previously_registered_station">
                                                    <option disabled="disabled" selected="selected"><?=$row['previously_registered_station']?></option>
                                                   
                                <option value="Adminstrator">Administrator</option>
                                <option value="User">User</option>
                                                    </select>
                                                    <p><small class="text-muted">Previous Police Station</small>
                                                </fieldset>  
                                                <span class="error" style="color: red;"><?php echo $previously_registered_station_error;?></span>
                    </div>
                    <div class="col-md-6">
                    <label for="last-name-icon">Current Police Station</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="currently_registered_station" id="currently_registered_station">
                                                    <option disabled="disabled"  selected="selected"><?=$row['currently_registered_station']?></option>
                                                   
                                <option value="Adminstrator">Administrator</option>
                                <option value="User">User</option>
                                                    </select>
                                                    <p><small class="text-muted">Current Police Station</small>
                                                </fieldset>  
                                                <span class="error" style="color: red;"><?php echo $currently_registered_station_error;?></span>
                    </div>
                    <div class="col-md-6">
                    <label for="last-name-icon">State/Region</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="state" id="state">
                                                    <option disabled="disabled" selected="selected"><?=$row['state']?></option>
                                                   
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
                                                <span class="error" style="color: red;"><?php echo $state_error;?></span>
                    </div>
                    <div class="col-md-6 ">
                    <div class="form-group has-icon-left">
                    
                        <label class="labels">Country</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="country" placeholder="Enter Country..." value="<?=$row['country']?>">
                        <div class="form-control-icon">
                        <i class="bi bi-globe"></i>
                         </div>
                        </div>
                         <p><small class="text-muted">Country</small>
                                </div>
                    </div>
</div>
<?php } } ?>
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