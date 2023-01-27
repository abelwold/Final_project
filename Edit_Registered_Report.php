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
include_once 'classes/Register_Report_Class.php';
include_once('classes/View_Registered_Data_Class.php');
include_once('classes/Update_Registered_Datas_Class.php');
$user = new Update_User_Data_Class();
$title_error = 
$first_name_error = 
$middel_name_error = 
$last_name_error = 
$phone_error = 
$address_error = 
$addressTwo_error = 
$city_error = 
$state_error = 
$zip_code_error = 
$rank_error = 
$identification_no_error = 
$first_name_registeree_error = 
$last_name_registeree_error = 
$crime_type_error = 
$incident_location_error = 
$nature_incident_error = 
$incident_details_error = 
$incident_motivated_error = 
$report_before_error = 
$arreseted_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["title"]) or empty($_POST['first_name'])or empty($_POST['middel_name'])or empty($_POST['last_name'])or empty($_POST['phone']) or empty($_POST['address'])or empty($_POST['addressTwo'])or empty($_POST['city'])or empty($_POST['state'])or empty($_POST['zip_code'])or empty($_POST['rank'])or empty($_POST['identification_no'])or empty($_POST['first_name_registeree'])or empty($_POST['last_name_registeree'])or empty($_POST['crime_type']) or empty($_POST['incident_location'])or empty($_POST['nature_incident'])or empty($_POST['incident_details'])or empty($_POST['incident_motivated'])or empty($_POST['report_before'])or empty($_POST['arreseted']))
     {
      $title_error = '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Field Required</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
      $first_name_error = '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Field Required</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  $middel_name_error = '<div class="alert alert-danger alert-dismissible fade show">
  <strong>Field Required </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
  $last_name_error = '<div class="alert alert-danger alert-dismissible fade show">
  <strong>Field Required </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$phone_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$address_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$addressTwo_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$city_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$state_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>RField Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$rank_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$zip_code_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$identification_no_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$first_name_registeree_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$last_name_registeree_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$crime_type_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$incident_location_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$nature_incident_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$incident_details_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$incident_details_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$incident_motivated_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$report_before_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$arreseted_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
} else {
        if (isset($_POST['submit'])) {
            $user->update_incident_reporter($_GET['id'],'title','first_name','middel_name','last_name','phone','address','addressTwo','city','state','zip_code'); 
            $user->update_registeree($_GET['id'],'rank','identification_no','first_name_registeree','last_name_registeree','crime_type','incident_location','nature_incident','incident_details','incident_motivated','report_before','arreseted');
        }
    } 
}

    include 'sidebar.php';
?>
<head>
<link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />
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
                            <h3>Edit Registered Crime(Incident)</h3>
                            <p class="text-subtitle text-muted">To Edit report Registered Crime(Incident), please provide the following information's</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                <p class="error"><?php echo @$register->error; ?></p>
                                    <li class="breadcrumb-item"><a href="Admin_Index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Registered Crime(Incident)</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'incident_reporter');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
<div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                <p class="error"><?php echo @$user->error; ?></p>
                                    <h4 class="card-title">Incident Form</h4>
     
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="" method="post" enctype="multipart/form-data">
                                            <div class="form-body">
                                               
                                                    <div class="row">
                                                    <div class="col-md-3">
                                                <fieldset class="form-group">
                                                <label for="last-name-icon">Title</label>
                                                    <select class="form-select" name="title" id="title">
                                                    <option value="<?= $row['title']?>"><?= $row['title']?></option>
                                                        <option value="MR.">MR.</option>
                                                        <option value="MS.">MS.</option>
                                                        <option value="Mrs.">Mrs</option>
                                                    </select>
                                                    <span class="error" style="color: red;"><?php echo $title_error;?></span>
                                                    
                                                  
                                                </fieldset>
                                                
                                            </div>
                                                    <div class="col-3">
                                                        <div class="form-group has-icon-left">
                                                            <label for="last-name-icon">First Name</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="First Name" name="first_name" id="first_name" value="<?= $row['first_name']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $first_name_error;?></span>
                                                            </div>
                                                            
                                                        </div>
                                                    </div> 
                                                    <div class="col-3">
                                                        <div class="form-group has-icon-left">
                                                            <label for="last-name-icon">Middle Name</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Middel Name" name="middel_name" id="middel_name"  value="<?= $row['middel_name']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $middel_name_error;?></span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group has-icon-left">
                                                            <label for="last-name-icon">Last Name</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Last Name" name="last_name" id="last_name" value="<?= $row['last_name']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $last_name_error;?></span>
                                                            </div>
                                                            
                                                        </div>
                                                    </div> 
                                                    <div class="col-6 mb-3">
                                                        <div class="form-group has-icon-left">
                                                            <label for="mobile-id-icon">Mobile</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Mobile" name="phone" id="phone"  pattern="[0-9]{3}[0-9]{3}[0-9]{3}" value="<?= $row['phone']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $phone_error;?></span>
                                                            </div>
                                                        </div>
                                                        <p><small class="text-muted">Ex: 911111111</small>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Street Address</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Address" name="address" id="address" value="<?= $row['address']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-map"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $address_error;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Street Address Line 2</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Address2" name="addressTwo" id="addressTwo" value="<?= $row['addressTwo']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-house"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $addressTwo_error;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-3">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">City</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="City"
                                                                     name="city" id="city" value="<?= $row['city']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-map"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $city_error;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-3">

                                                        <div class="form-group has-icon-left">
                                                            <label for="last-name-icon">State/Province</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="State/Province" name="state" id="state" value="<?= $row['state']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-map"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $state_error;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-3">

                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Postal / Zip Code</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Postal / Zip Code" name="zip_code" id="zip_code" value="<?= $row['zip_code']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-mailbox"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $zip_code_error;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <?php } } ?>
                                                    <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'registeree');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
                                                    <div class="row">
                                                <h6>Incident report Register by:</h6>

                                                <label for="invalid-state">Rank</label>
                                                <!-- <h6>Incident report issued by:</h6> -->
                                                <fieldset class="form-group">
                                                    <select class="form-select"  id="invalid-state" name="rank" id="rank">
                                                    <option > <?= $row['rank']?></option>
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
                                                    <p><small class="text-muted">Rank</small>
                                                        <span class="error" style="color: red;"><?php echo $rank_error;?></span>
                                                </fieldset>
                                            
                                            
                                                    <div class="col-6 mb-4" >

                                                        <div class="form-group has-icon-left">
                                                            <label for="last-name-icon">Identification No</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Identification No" name="identification_no" id="identification_no" value="<?= $row['identification_no']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $identification_no_error;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-6 mb-4" >

                                                        <div class="form-group has-icon-left">
                                                            <label for="last-name-icon">First Name</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Police First Name" name="first_name_registeree" id="first_name_registeree" value="<?= $row['first_name_registeree']?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $first_name_registeree_error;?></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 mb-4" >

                                                        <div class="form-group has-icon-left">
                                                            <label for="last-name-icon">Last Name</label>
                                                                <div class="position-relative">
                                                                     <input type="text" class="form-control"
                                                                    placeholder="Police Last Name" name="last_name_registeree" id="last_name_registeree" value="<?= $row['last_name_registeree']?>">
                                                                    <div class="form-control-icon">
                                                                <i class="bi bi-person"></i>
                                                                </div>
                                                                <span class="error" style="color: red;"><?php echo $last_name_registeree_error;?></span>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                 <?php 
                                                                //  $string =  $row['crime_type'];
                                                                // print_r($string);
                                                                // $str = explode(',',$string);
                                                                // $size =  sizeof($str);
                                                                // print_r($size);
                                                                // print_r($str[0]);
                                                                // foreach($str as $s){
                                                                //     print_r(" ".$s);
                                                                // }

                                                                // ?>
                                                   
                                                                <div class="form-group mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Type of Crime:</label>
                                                <fieldset class="form-group">
                                            <select class="choices form-select multiple-remove" name="crime_type[]" id="crime_type" multiple="multiple">
                                            <optgroup label="Crimes">
                                            <option value="" selected><?php
                                            $string =  $row['crime_type'];
                                            $str = explode(',',$string);
                                            // print_r($str);
                                            foreach($str as $s){
                                                
                                                echo "<option value='$s' selected><option>";
                                            }
                                            // $size =  sizeof($str);
                                            // for($i = 0; $i < $size;$i++){
                                            //     echo "<option value='$str[$i]' selected>";
                                            // }
                                            ?>
                                            
                                        </option>
                                    <option value="Arson">Arson</option>
                                    <option value="Assault">Assault</option>
                                    <option value="Bank and credit card fraud">Bank and credit card fraud</option>
                                    <option value="Burglary">Burglary</option>
                                    <option value="Child abuse">Child abuse</option>
                                    <option value="Computer misuse">Computer misuse</option>
                                    <option value="Counterfeiting and piracy">Counterfeiting and piracy</option>
                                    <option value="Domestic abuse">Domestic abuse</option>
                                    <option value="Doorstep crime">Doorstep crime</option>
                                    <option value="Doorstep crime (rogue traders)">Doorstep crime (rogue traders)</option>
                                    <option value="Drink / drug driving">Drink / drug driving</option>
                                    <option value="Drugs">Drugs</option>
                                    <option value="Environmental crime">Environmental crime</option>
                                    <option value="Fraud">Fraud</option>
                                    <option value="Gun crime">Gun crime</option>
                                    <option value="Harassment ">Harassment</option>
                                    <option value="Hate crime">Hate crime</option>
                                    <option value="Illegal tobacco">Illegal tobacco</option>
                                    <option value="Immigration">Immigration</option>
                                     <option value="Knife crime">Knife crime</option>
                                     <option value="Modern slavery">Modern slavery</option>
                                     <option value="Murder (incl. attempted / planned murder)">Murder (incl. attempted / planned murder)</option>
                                     <option value="Other">Other</option>
                                     <option value="Possession of weapons">Possession of weapons</option>
                                     <option value="Rape and sexual offences">Rape and sexual offences</option>
                                     <option value="Robbery">Robbery</option>
                                     <option value="Rural crimes">Rural crimes</option>
                                     <option value="Terrorism">Terrorism</option>
                                     <option value="Theft">Theft</option>
                                     <option value="Vandalism">Vandalism</option>
                                     <option value="Vehicle">Vehicle</option>
                                     <option value="Violence">Violence</option>
                                     <option value="Wanted person / fugitive">Wanted person / fugitive</option>
                                     <option value="Weapons">Weapons</option>
                                     <option value="Wildlife crime">Wildlife crime</option>
                                            </optgroup>
                                            <optgroup label="Inscidents">
                                                            <option value="other">Other</option>
                                                          
                                                        </optgroup>
                                        </select>
                                        </fieldset>
                                        <span class="error" style="color: red;"><?php echo $crime_type_error;?></span>
                                        </div>
                                                    
                                                    
                                                                        <div class="form-group mb-3">
                                                                            <label for="exampleFormControlTextarea1" class="form-label">Incident Location (Please provide specific details):</label>
                                                                            <textarea class="form-control" name="incident_location" id="incident_location"
                                                                                rows="3"><?= $row['incident_location']?></textarea>
                                                                                <span class="error" style="color: red;"><?php echo $incident_location_error;?></span>
                                                                        </div>
                                                            
                                                                        <div class="form-group mb-3">
                                                                            <label for="exampleFormControlTextarea1" class="form-label">Nature of incident:</label>
                                                                            <textarea class="form-control" name="nature_incident"  id="nature_incident" rows="3"><?php echo $row['nature_incident'] ?></textarea>
                                                                            <span class="error" style="color: red;"><?php echo $nature_incident_error;?></span>
                                                                        </div>
                                                                        
                                                                        <div class="form-group mb-3">
                                                                            <label for="exampleFormControlTextarea1" class="form-label">Incident details:</label>
                                                                            <textarea class="form-control" name="incident_details" id="incident_details"
                                                                                rows="3"><?php echo $row['nature_incident'] ?></textarea>
                                                                                <span class="error" style="color: red;"><?php echo $incident_details_error;?></span>
                                                                        </div>
                                                                        
                                                                        <div class="form-group mb-3">
                                                                            <label for="exampleFormControlTextarea1" class="form-label">What motivated the incident?:</label>
                                                                            <textarea class="form-control" name="incident_motivated" id="incident_motivated" 
                                                                                rows="3"><?= $row['incident_motivated']?></textarea>
                                                                        </div>

                                                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Was a report of
                                                the incident issued to the police?:</label>
                                                <fieldset class="form-group">
                                            <select class="form-select" name="report_before" id="report_before">
                                                <option value="<?= $row['report_before']?>" disabled><?= $row['report_before']?></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="Do_not_know">Do not Know</option>
                                            </select>
                                            <span class="error" style="color: red;"><?php echo $report_before_error;?></span>
</fieldset>
                                        </div>

                                                                       
                                                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Has anyone been arrested so far in relation to the incident?:</label>
                                                <fieldset class="form-group">
                                            <select class="form-select" name="arreseted" id="arreseted">
                                                <option value="<?= $row['arreseted']?>" disabled><?= $row['report_before']?></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="Do_not_know">Do not Know</option>
                                            </select>
                                            <span class="error" style="color: red;"><?php echo $arreseted_error;?></span>
</fieldset>
                                        </div>
                                        
                                        </div>
                  
                                                     
                                                    <div class="col-12">
                                                        <div class='form-check'>
                                                            <div class="checkbox mt-2">
                                                                <input type="checkbox" value="certified" name="certify" id="certify"
                                                                    class='form-check-input' required>
                                                                <label for="remember-me-v"> I certify that the above information is true and correct. </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } } ?>
                                                   
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="submit">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="assets/vendors/choices.js/choices.min.js"></script>