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
include_once('classes/Update_Registered_Crime_Class.php');
$user = new Update_Crime_Data_Class;

$marital_status_error  =  "";

// $db = DatabaseConnection::getInstance();
$first_name_error = 
$middle_name_error = 
$last_name_error = 
$date_of_birth_error = 
$marital_status_error = 
$resident_address_error = 
$city_error = 
$state_error = 
$phone_error = 
$passport_photo_error =
$signature_photo_error =
$Id_document_type_error = 
$id_document_photo_error = 
$hight_error = 
$weight_error = 
$eye_color_error = 
$hair_color_error = 
$emergency_phone_error = 
$date_of_court_appearance_error = 
$location_of_court_error = 
$Nature_of_offence_error = 
$date_of_offence_error = 
$location_of_offence_error = 
$Investigating_off_first_name_error = 
$Investigating_off_last_name_error =
$Investigating_off_id_error =
"";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["first_name"]) or empty($_POST['middle_name'])or empty($_POST['last_name'])or empty($_POST['date_of_birth'])or empty($_POST['marital_status']) or empty($_POST['resident_address'])or empty($_POST['city'])or empty($_POST['state'])or empty($_POST['phone'])or empty($_POST['Id_document_type'])or empty($_POST['hight'])or empty($_POST['weight'])or empty($_POST['eye_color'])or empty($_POST['hair_color'])or empty($_POST['emergency_phone'])or empty($_POST['date_of_court_appearance'])or empty($_POST['location_of_court'])or empty($_POST['Nature_of_offence'])or empty($_POST['date_of_offence'])or empty($_POST['location_of_offence'])or empty($_POST['Investigating_off_first_name'])or empty($_POST['Investigating_off_last_name'])or empty($_POST['Investigating_off_id']))
     {
      $first_name_error = '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Field Required</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
      $middle_name_error = '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Field Required</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>';
  $last_name_error = '<div class="alert alert-danger alert-dismissible fade show">
  <strong>Field Required </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
  $date_of_birth_error = '<div class="alert alert-danger alert-dismissible fade show">
  <strong>Field Required </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$marital_status_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$resident_address_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$city_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$city_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$state_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$phone_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$passport_photo_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$signature_photo_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$Id_document_type_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$id_document_photo_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$hight_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$weight_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$eye_color_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$hair_color_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$emergency_phone_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$date_of_court_appearance_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$location_of_court_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$Nature_of_offence_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$date_of_offence_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$location_of_offence_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$Investigating_off_first_name_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$Investigating_off_last_name_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$Investigating_off_id_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
}
else { 
        if (isset($_POST['submit'])) {

$user->update_suspected_person_detailes_data($_GET['id'],'first_name','middle_name','last_name','date_of_birth','marital_status','resident_address','city','state','phone','Id_document_type','hight','weight','eye_color','hair_color','emergency_phone');
$user->update_details_of_offence($_GET['id'],'date_of_court_appearance','location_of_court','Nature_of_offence','date_of_offence','location_of_offence');
$user->update_investigating_officer_form($_GET['id'],'Investigating_off_first_name','Investigating_off_last_name','Investigating_off_id');

}
    


if (isset($_FILES['previous_passport_photo']['name']) and !empty($_FILES['previous_passport_photo']['name'])) {
    $g = $user->UpdateImage_previous_passport_photo($_GET['id'],$_FILES,'previous_passport_photo');
}
if (isset($_FILES['previous_signature_photo']['name']) and !empty($_FILES['previous_signature_photo']['name'])) {
    $g = $user->UpdateImage_previous_signature_photo($_GET['id'],$_FILES,'previous_signature_photo');
}
if (isset($_FILES['previous_id_document_photo']['name']) and !empty($_FILES['previous_id_document_photo']['name'])) {
    $g = $user->UpdateImage_previous_id_document_photo($_GET['id'],$_FILES,'previous_id_document_photo');
}
// $db = DatabaseConnection::getInstance();
}
}
    include 'sidebar.php';
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
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
        <form class="form form-horizontal" action="" enctype="multipart/form-data" autocomplete="off" method="post">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Edit Register Suspect Data</h3>
                        <p class="text-subtitle text-muted">To Edit Registered Suspect data, please provide the following
                            information's</p>
                    </div>
                    <p class="error"><?php echo @$user->error; ?></p>
                    <!-- <p class="error"><?php echo @$value_Validator->error; ?></p> -->

                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Admin_Index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Register Suspect Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'suspected_person_detailes');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Suspected Person Detailes</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input autocomplete="off" type="text" name="first_name" id="first_name"
                                                    class="form-control" value="<?=$row['first_name']?>">
                                                <span class="error"
                                                    style="color: red;"><?php echo $first_name_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Middle Name</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" name="middle_name" id="middle_name"
                                                    class="form-control" value="<?=$row['middle_name']?>">
                                                <span class="error"
                                                    style="color: red;"><?php echo $middle_name_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" name="last_name" id="last_name" class="form-control"
                                                    value="<?=$row['last_name']?>">
                                                <span class="error"
                                                    style="color: red;"><?php echo $last_name_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Date Of Birth</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" name="date_of_birth" id="date_of_birth"
                                                    class="form-control" value="<?=$row['date_of_birth']?>">
                                                <span class="error"
                                                    style="color: red;"><?php echo $date_of_birth_error;?></span>
                                            </div>

                                            <label>Marital Status</label>
                                            <fieldset class="form-group">
                                                <select class="form-select" name="marital_status" id="marital_status"
                                                    required>
                                                    <option value="<?=$row['marital_status']?>"><?=$row['marital_status']?></option>
                                                    <option value="Married">Married</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Divorced">Divorced</option>
                                                </select>
                                                <span class="error"
                                                    style="color: red;"><?php echo $marital_status_error;?></span>
                                            </fieldset>
                                            <span class="error"
                                                style="color: red;"><?php echo $marital_status_error;?></span>
                                            <div class="col-md-4">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="resident_address" class="form-control"
                                                    name="resident_address" value="<?=$row['resident_address']?>">
                                                <span class="error"
                                                    style="color: red;"><?php echo $resident_address_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="city" class="form-control" name="city"
                                                    value="<?=$row['city']?>">
                                                <span class="error" style="color: red;"><?php echo $city_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>State</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="state" class="form-control" name="state"
                                                    value="<?=$row['state']?>">
                                                <span class="error"
                                                    style="color: red;"><?php echo $state_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Phone No</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="phone" class="form-control" name="phone"
                                                    value="<?=$row['phone']?>" pattern="[0-9]{3}[0-9]{3}[0-9]{3}">
                                                <span class="error"
                                                    style="color: red;"><?php echo $phone_error;?></span>
                                                <small>Format: 911111111</small>
                                            </div>
                                            <div class="container py-4">
                                                <h6>Passport Size Photo</h6>
                                                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                                                    <div class="col">
                                                        <div class="card">
                                                            <div class="ratio ratio-1x1 rounded-circle overflow-hidden">
                                                                <img src="<?=$row['passport_photo']?>"
                                                                    class="card-img-top img-cover"
                                                                    alt="abelczdczxczxczxczxczxc">
                                                            </div>
                                                            <input type="hidden" name="previous_passport_photo"
                                                                id="previous_passport_photo"
                                                                value="<?php $user->get_userImage($_GET['id'],'passport_photo') ?>" />
                                                            <div
                                                                class="card-body row g-4 row-cols-1 row-cols-lg-1 row-cols-md-12">
                                                                <input type="file" name="previous_passport_photo"
                                                                    id="previous_passport_photo"
                                                                    class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container py-4">
                                                <h6>signature_photo</h6>
                                                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                                                    <div class="col">
                                                        <div class="card">
                                                            <div class="ratio ratio-1x1 rounded-circle overflow-hidden">
                                                                <img src="<?=$row['signature_photo']?>"
                                                                    class="card-img-top img-cover" alt="">

                                                            </div>
                                                            <input type="hidden" name="previous_signature_photo"
                                                                id="previous_signature_photo"
                                                                value="<?php $user->get_userImage($_GET['id'],'signature_photo') ?>" />
                                                            <div
                                                                class="card-body row g-4 row-cols-1 row-cols-lg-1 row-cols-md-12">
                                                                <input type="file" name="previous_signature_photo"
                                                                    id="previous_signature_photo"
                                                                    class="btn btn-primary">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container py-4">
                                                <h6>id_document_photo</h6>
                                                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                                                    <div class="col">
                                                        <div class="card">
                                                            <div class="ratio ratio-1x1 rounded-circle overflow-hidden">
                                                                <img src="<?=$row['id_document_photo']?>"
                                                                    class="card-img-top img-cover" alt="">
                                                            </div>
                                                            <input type="hidden" name="previous_id_document_photo"
                                                                id="previous_id_document_photo"
                                                                value="<?php $user->get_userImage($_GET['id'],'id_document_photo') ?>" />
                                                            <div
                                                                class="card-body row g-4 row-cols-1 row-cols-lg-1 row-cols-md-12">
                                                                <input type="file" name="previous_id_document_photo"
                                                                    id="previous_id_document_photo"
                                                                    class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label>Id Document Type</label>
                                            <fieldset class="form-group">
                                                <select class="form-select" name="Id_document_type"
                                                    id="Id_document_type"><?=$row['Id_document_type']?>
                                                    <option  value="<?=$row['Id_document_type']?>">Driving
                                                        License</option>
                                                    <option>Driving License</option>
                                                    <option>Regional ID</option>
                                                    <option>Passport</option>
                                                </select>
                                                <span class="error"
                                                    style="color: red;"><?php echo $Id_document_type_error;?></span>
                                            </fieldset>

                                            <div class="col-md-4">
                                                <label>Height</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="hight" class="form-control" name="hight"
                                                    value="<?=$row['hight']?>">
                                                    <span class="error"
                                                    style="color: red;"><?php echo $hight_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Weight</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="weight" class="form-control" name="weight"
                                                    value="<?=$row['weight']?>">
                                                    <span class="error"
                                                    style="color: red;"><?php echo $weight_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Eye Color</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="eye_color" class="form-control" name="eye_color"
                                                    value="<?=$row['eye_color']?>">
                                                    <span class="error"
                                                    style="color: red;"><?php echo $eye_color_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Hair Color</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="hair_color" class="form-control"
                                                    name="hair_color" value="<?=$row['hair_color']?>">
                                                    <span class="error"
                                                    style="color: red;"><?php echo $hair_color_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Emergency Phone </label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="emergency_phone" class="form-control"
                                                    name="emergency_phone" value="<?=$row['emergency_phone']?>">
                                                    <span class="error"
                                                    style="color: red;"><?php echo $emergency_phone_error;?></span>
                                                <small>Format: 911111111</small>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } } ?>
                    <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'details_of_offence');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Details of offence</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Date of Court Appearance </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-right">
                                                    <div class="position-relative">
                                                        <input type="text" name="date_of_court_appearance"
                                                            class="form-control" placeholder="Date of Court Appearance"
                                                            id="date_of_court_appearance"
                                                            value="<?=$row['date_of_court_appearance']?>">
                                                        <div class="form-control-icon">
                                                            <!-- <i class="bi bi-person"></i> -->
                                                        </div>
                                                    </div>
                                                    <span class="error"
                                                        style="color: red;"><?php echo $date_of_court_appearance_error;?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Location of Court</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" name="location_of_court" class="form-control"
                                                            placeholder="Location of Court" id="location_of_court"
                                                            value="<?=$row['location_of_court']?>">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-envelope"></i>
                                                        </div>
                                                    </div>
                                                    <span class="error"
                                                        style="color: red;"><?php echo $location_of_court_error;?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nature of Offence</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <textarea class="form-control" name="Nature_of_offence"
                                                            id="Nature_of_offence"
                                                            rows="29"><?=$row['Nature_of_offence']?></textarea>
                                                    </div>
                                                </div>
                                                <span class="error"
                                                        style="color: red;"><?php echo $Nature_of_offence_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Date of offence </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" name="date_of_offence"
                                                            value="<?=$row['date_of_offence']?>" class="form-control"
                                                            placeholder="Nature of Offence">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-phone"></i>
                                                        </div>
                                                    </div>
                                                    <span class="error"
                                                        style="color: red;"><?php echo $date_of_offence_error;?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Location of Offence </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" name="location_of_offence"
                                                            value="<?=$row['location_of_offence']?>"
                                                            class="form-control" placeholder="Nature of Offence">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-phone"></i>
                                                        </div>
                                                    </div>
                                                    <span class="error"
                                                        style="color: red;"><?php echo $location_of_offence_error;?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php } } ?>
            <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'investigating_officer_form');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md- col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Investigating officer Form</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Investigating officer First Name</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="Investigating_off_first_name"
                                                    class="form-control" name="Investigating_off_first_name"
                                                    value="<?=$row['Investigating_off_first_name']?>"
                                                    placeholder="Investigating officer First Name">
                                                    <span class="error"
                                                    style="color: red;"><?php echo $Investigating_off_first_name_error;?></span>
                                            </div>
                                           
                                            <div class="col-md-4">
                                                <label>Investigating officer Last Name</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="Investigating_off_last_name" class="form-control"
                                                    name="Investigating_off_last_name"
                                                    value="<?=$row['Investigating_off_last_name']?>"
                                                    placeholder="Investigating officer Last Name">
                                                    <span class="error"
                                                    style="color: red;"><?php echo $Investigating_off_last_name_error;?></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Investigating officer Identification No</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="Investigating_off_id" class="form-control"
                                                    name="Investigating_off_id"
                                                    value="<?=$row['Investigating_off_id']?>"
                                                    placeholder="Investigating officer Identification No">
                                                    <span class="error"
                                                    style="color: red;"><?php echo $Investigating_off_id_error;?></span>
                                            </div>



                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } } ?>
                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">Submit</button>
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>
        </form>
        </section>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
        tinymce.init({
            selector: 'textarea#editor',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
        });
        </script>
        <script>
        tinymce.init({
            selector: 'textarea#editor',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
            setup: (editor) => {
                // Apply the focus effect
                editor.on("init", () => {
                    editor.getContainer().style.transition =
                        "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
                });
                editor.on("focus", () => {
                    (editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)"),
                    (editor.getContainer().style.borderColor = "#80bdff");
                });
                editor.on("blur", () => {
                    (editor.getContainer().style.boxShadow = ""),
                    (editor.getContainer().style.borderColor = "");
                });
            },
        });
        </script>