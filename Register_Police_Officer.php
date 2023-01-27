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
include_once 'classes/Register_New_Police_Officer_Class.php';
include_once "classes/singleton#1.php";
$db = DatabaseConnection::getInstance();

$police_id_error = 
$first_name_error = 
$middel_name_error = 
$last_name_error = 
$date_of_birth_error = 
$gender_error = 
$nationality_error = 
$address_error = 
$country_error = 
$city_error = 
$state_error = 
$phone_error = 
$email_error = 
$previously_registered_station_error = 
$currently_registered_station_error = 
$rank_error = 
$position_error = 
$date_join_police_error =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["rank"]) || empty($_POST['police_id']) || empty($_POST['position']) || empty($_POST['date_join_police']) || empty($_POST['first_name']) || empty($_POST['middle_name']) || empty($_POST['last_name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['date_of_birth']) || empty($_POST['nationality']) || empty($_POST['address']) || empty($_POST['gender']) || empty($_POST['city']) || empty($_POST['previously_registered_station']) || empty($_POST['currently_registered_station']) || empty($_POST['state']) || empty($_POST['country']))
     {
      $police_id_error = '<div class="alert alert-danger alert-dismissible fade show">
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
$date_of_birth_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$gender_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$nationality_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$address_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$country_error = '<div class="alert alert-danger alert-dismissible fade show">
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
$email_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$previously_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$currently_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$rank_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 
$position_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
$date_join_police_error = '<div class="alert alert-danger alert-dismissible fade show">
<strong>Field Required </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>'; 

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }
//   $input = [];

// if (empty($_POST["police_id"])){
//     $police_id_error = '<div class="alert alert-danger alert-dismissible fade show">
//     <strong>Field Required </strong>
//     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//     </div>'; 
//   }
  
// if(empty($_POST['first_name'])){
//     $first_name_error = '<div class="alert alert-danger alert-dismissible fade show">
//           <strong>Field Required</strong> 
//           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//       </div>';
// }
// else {
//     $first_name = test_input($_POST["first_name"]);
//   }

//   if(empty($_POST['middle_name'])){
//     $middle_name_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $middle_name = test_input($_POST["middle_name"]);
//   }
//   if(empty($_POST['last_name'])){
//     $last_name_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $last_name = test_input($_POST["last_name"]);
//   }
//   if(empty($_POST['date_of_birth'])){
//     $date_of_birth_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $date_of_birth = test_input($_POST["date_of_birth"]);
//   }
//   if(empty($_POST['gender'])){
//     $gender_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $gender = test_input($_POST["gender"]);
//   }
//   if(empty($_POST['nationality'])){
//     $nationality_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $nationality = test_input($_POST["nationality"]);
//   }
//   if(empty($_POST['address'])){
//     $address_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $address = test_input($_POST["address"]);
//   }
//   if(empty($_POST['country'])){
//     $country_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $country = test_input($_POST["country"]);
//   }
//   if(empty($_POST['city'])){
//     $city_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $city = test_input($_POST["city"]);
//   }
//   if(empty($_POST['state'])){
//     $state_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $state = test_input($_POST["state"]);
//   }
//   if(empty($_POST['phone'])){
//     $phone_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $phone = test_input($_POST["phone"]);
//   }
//   if(empty($_POST['email'])){
//     $email_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $email = test_input($_POST["email"]);
//   }
//   if(empty($_POST['previously_registered_station'])){
//     $previously_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $previously_registered_station = test_input($_POST["previously_registered_station"]);
//   }
//   if(empty($_POST['currently_registered_station'])){
//     $currently_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $currently_registered_station = test_input($_POST["currently_registered_station"]);
//   }
//   if(empty($_POST['rank'])){
//     $rank_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $rank = test_input($_POST["rank"]);
//   }
//   if(empty($_POST['position'])){
//     $position_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $position = test_input($_POST["position"]);
//   }
//   if(empty($_POST['date_join_police'])){
//     $date_join_police_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }
// else {
//     $date_join_police = test_input($_POST["date_join_police"]);
//   }


// $inputData=[];


// if (empty($_POST["police_id"])){
//     $police_id_error = '<div class="alert alert-danger alert-dismissible fade show">
//     <strong>Field Required </strong>
//     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//     </div>'; 
//   }
//   else{
//    $_POST['police_id'];
//   }
  
// if(empty($_POST['first_name'])){
//     $first_name_error = '<div class="alert alert-danger alert-dismissible fade show">
//           <strong>Field Required</strong> 
//           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//       </div>';
// }

//   if(empty($_POST['middle_name'])){
//     $middle_name_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['last_name'])){
//     $last_name_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['date_of_birth'])){
//     $date_of_birth_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['gender'])){
//     $gender_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['nationality'])){
//     $nationality_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['address'])){
//     $address_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['country'])){
//     $country_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['city'])){
//     $city_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['state'])){
//     $state_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['phone'])){
//     $phone_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['email'])){
//     $email_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['previously_registered_station'])){
//     $previously_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['currently_registered_station'])){
//     $currently_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['rank'])){
//     $rank_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['position'])){
//     $position_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }

//   if(empty($_POST['date_join_police'])){
//     $date_join_police_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
// }









// empty($_POST['police_id'])or empty($_POST['position'])or empty($_POST['date_join_police'])or empty($_POST['first_name']) or empty($_POST['middle_name'])or empty($_POST['last_name'])or empty($_POST['phone'])or empty($_POST['email'])or empty($_POST['date_of_birth'])or empty($_POST['nationality'])or empty($_POST['address'])or empty($_POST['gender'])or empty($_POST['city'])or empty($_POST['previously_registered_station']) or empty($_POST['currently_registered_station'])or empty($_POST['state'])or empty($_POST['country']))
//      {
//       $police_id_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong> 
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
//       $first_name_error = '<div class="alert alert-danger alert-dismissible fade show">
//       <strong>Field Required</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//   </div>';
//   $middel_name_error = '<div class="alert alert-danger alert-dismissible fade show">
//   <strong>Field Required </strong> 
//   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>';
//   $last_name_error = '<div class="alert alert-danger alert-dismissible fade show">
//   <strong>Field Required </strong>
//   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>'; 
// $date_of_birth_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong> 
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>';
// $gender_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>'; 
// $nationality_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong> 
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>';
// $address_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>'; 
// $country_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong> 
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>';
// $city_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>'; 
// $state_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>';
// $phone_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong> 
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>';
// $email_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>'; 
// $previously_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong> 
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>';
// $currently_registered_station_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>'; 
// $rank_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>'; 
// $position_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong> 
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>';
// $date_join_police_error = '<div class="alert alert-danger alert-dismissible fade show">
// <strong>Field Required </strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// </div>'; 




}
else {

    if((isset($_POST['submit'])))
    {
       
        $inputData = [
            'police_id' => $db,$_POST['police_id'],
            'first_name' => $db,$_POST['first_name'],
            'middle_name' => $db,$_POST['middle_name'],
            'last_name' => $db,$_POST['last_name'],
            'date_of_birth' => $db,$_POST['date_of_birth'],
            'gender' => $db,$_POST['gender'],
            'nationality' => $db,$_POST['nationality'],
            'address' => $db,$_POST['address'],
            'country' => $db,$_POST['country'],
            'city' => $db,$_POST['city'],
            'state' => $db,$_POST['state'],
            'phone' => $db,$_POST['phone'],
            'email' => $db,$_POST['email'],
            'previously_registered_station' => $db,$_POST['previously_registered_station'],
            'currently_registered_station' => $db,$_POST['currently_registered_station'],
            'rank' => $db,$_POST['rank'],
            'position' => $db,$_POST['position'],
            'date_join_police' => $db,$_POST['date_join_police'],    
        ];
    
        $object = new RegisterNewPoliceOff;
        $result = $object->storeNewPoliceOfficer($_POST,$_FILES,$inputData);
            
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
                                    <li class="breadcrumb-item"><a href="Admin_Index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Register Police Officer</li>
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
                <img class="rounded-circle mt-5" width="150px" src="https://cdn-icons-png.flaticon.com/512/5600/5600530.png">
                <input type="file" name="photo" class="form-control">
            </div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"> Police Officer Registration Form</h4>
                </div>
                       <!-- <p class="error"><?php echo @$message; ?></p> -->
                       <p class="error"><?php echo @$object->error; ?></p>
                <div class="row ">
                    <div class="col-md-6 mt-4">
                    <label for="last-name-icon">Rank</label>
                    <fieldset class="form-group">
                                                    <select class="form-select"  name="rank" id="rank">
                                                    <option value="" ></option>
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
                                                    <span class="error" style="color: red;"><?php echo $rank_error;?></span>
                                                    <p><small class="text-muted">Mr/Ms/Mrs.</small>
                                                </fieldset>  
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Identification No.</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="police_id" placeholder="Identification No." id="police_id">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <span class="error" style="color: red;"><?php echo $police_id_error;?></span>
                                    <p><small class="text-muted">Identification No.</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Position</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="position" placeholder="Position" id="position">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <span class="error" style="color: red;"><?php echo $position_error;?></span>
                                    <p><small class="text-muted">Position</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Date for join Police Academy</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" name="date_join_police" placeholder="Enter Date for join Police Academy" id="date_join_police">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <span class="error" style="color: red;"><?php echo $date_join_police_error;?></span>
                                    <p><small class="text-muted">Date for join Police Academy</small>
                                </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">First Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" id="first_name">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                         </div>
                                    </div>
                                    <span class="error" style="color: red;"><?php echo $first_name_error;?></span>
                                    <p><small class="text-muted">First Name</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Middle Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Enter Middle Name" name="middle_name" id="middle_name">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                         </div>
                                    </div>
                                    <span class="error" style="color: red;"><?php echo $middel_name_error;?></span>
                                    <p><small class="text-muted">Middle Name</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Last Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" id="last_name">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                         </div>
                                    </div>
                                    <span class="error" style="color: red;"><?php echo $last_name_error;?></span>
                                    <p><small class="text-muted">Last Name</small>
                                </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group has-icon-left">
                        <label  for="last-name-icon" >Mobile Number</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="phone"  pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="Enter Phone number...">
                        <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                         </div>
                        </div>
                        <span class="error" style="color: red;"><?php echo $phone_error;?></span>
                        <p><small class="text-muted">Ex: 911111111</small>
                                </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group has-icon-left">
                        <label  for="last-name-icon" >Email</label>
                        <div class="position-relative">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email...">
                        <div class="form-control-icon">
                        <i class="bi bi-email"></i>
                         </div>
                        </div>
                        <span class="error" style="color: red;"><?php echo $email_error;?></span>
                         <p><small class="text-muted">Email</small>
                                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Date of Birth</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" name="date_of_birth" placeholder="Enter Date of Birth" id="date_of_birth">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <span class="error" style="color: red;"><?php echo $date_of_birth_error;?></span>
                                    <p><small class="text-muted">Date of Birth</small>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group has-icon-left">
                            <label for="last-name-icon">Nationality</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality" id="nationality">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-vcard"></i>
                                         </div>
                                    </div>
                                    <span class="error" style="color: red;"><?php echo $nationality_error;?></span>
                                    <p><small class="text-muted">Nationality</small>
                                </div>
                </div>
                    <div class="col-md-6 ">
                    <div class="form-group has-icon-left">
                        <label  for="last-name-icon" >Address</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="address" placeholder="Enter Address...">
                        <div class="form-control-icon">
                        <i class="bi bi-map"></i>
                         </div>
                        </div>
                        <span class="error" style="color: red;"><?php echo $address_error;?></span>
                         <p><small class="text-muted">Address</small>
                                </div>
                    </div>
                    <div class="col-md-6">
                    <label for="last-name-icon">Gender</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="gender" id="gender">
                                                    <option value=""></option>
                                                   
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                                    </select>
                                                    <span class="error" style="color: red;"><?php echo $gender_error;?></span>
                                                    <p><small class="text-muted">Male/Female</small>
                                                </fieldset>  
                    </div>
                    <div class="col-md-6 ">
                    <div class="form-group has-icon-left">
                        <label  for="last-name-icon" >City</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="city" placeholder="Enter City..." >
                        <div class="form-control-icon">
                        <i class="bi bi-map"></i>
                         </div>
                        </div>
                        <span class="error" style="color: red;"><?php echo $city_error;?></span>
                         <p><small class="text-muted">City</small>
                                </div>
                    </div>
                   <div class="col-md-6">
                    <label for="last-name-icon">Previous Police Station</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="previously_registered_station" id="previously_registered_station">
                                                    <option value=""></option>
                                                   
                                <option value="Adminstrator">Administrator</option>
                                <option value="User">User</option>
                                                    </select>
                                                    <span class="error" style="color: red;"><?php echo $previously_registered_station_error;?></span>
                                                    <p><small class="text-muted">Previous Police Station</small>
                                                </fieldset>  
                    </div>
                    <div class="col-md-6">
                    <label for="last-name-icon">Current Police Station</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="currently_registered_station" id="currently_registered_station">
                                                    <option value=""></option>
                                                   
                                <option value="Adminstrator">Administrator</option>
                                <option value="User">User</option>
                                                    </select>
                                                    <span class="error" style="color: red;"><?php echo $currently_registered_station_error;?></span>
                                                    <p><small class="text-muted">Current Police Station</small>
                                                </fieldset>  
                    </div>
                    <div class="col-md-6">
                    <label for="last-name-icon">State/Region</label>
                    <fieldset class="form-group">
                                                    <select class="form-select" name="state" id="state">
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
                                                    <span class="error" style="color: red;"><?php echo $state_error;?></span>
                                                    <p><small class="text-muted">State/Region</small>
                                                </fieldset>  
                    </div>
                    <div class="col-md-6 ">
                    <div class="form-group has-icon-left">
                    
                        <label class="labels">Country</label>
                        <div class="position-relative">
                        <input type="text" class="form-control" name="country" placeholder="Enter Country...">
                        <div class="form-control-icon">
                        <i class="bi bi-globe"></i>
                         </div>
                        </div>
                        <span class="error" style="color: red;"><?php echo $country_error;?></span>
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