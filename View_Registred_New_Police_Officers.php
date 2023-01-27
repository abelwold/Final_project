<?php
session_start();
include_once 'classes/Login_Class.php';
include_once 'classes/View_Registerd_New_Police_Officers_Class.php';
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
include 'sidebar.php';
?>
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
	<!--  If you want to help us go here https://www.bootdey.com/help-us -->
    <title>profile with info skills and friends - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
.myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}
.myImg:hover {opacity: 0.7;}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}
/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}
/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}
@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}
/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}
.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}
/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</head>
<body>
        <div id="main">
         

        <div class="page-heading">
                <!-- <h3>Registered Crime(Incidents)</h3> -->
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Registered Police Officers</h3>
                            <p class="text-subtitle text-muted">Only to View Detailes of Registered Police Officers.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                <p class="error"><?php echo @$register->error; ?></p>
                                    <li class="breadcrumb-item"><a href="Admin_Index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Registered Police Officers</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
     
    <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'register_police_officer');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
<div class="layout-content print-container">

          <!-- Content -->
          <div class="container flex-grow-1 container-p-y">

            <!-- Header -->
            <div class="container-m-nx container-m-ny theme-bg-white mb-4">
              <div class="media col-md-10 col-lg-8 col-xl-7 py-5 mx-auto">
              <a href="Download_Police_Officers_Picture.php?id=<?=$row['photo']?>">
  <img src="<?= $row['photo']?>" alt="" class="d-block ui-w-100 rounded-circle">Download</a>
                <div class="media-body ml-5">
                  <h4 class="font-weight-bold mb-4"><?= $row['first_name'] ?> <?= $row['middle_name'] ?> <?= $row['last_name'] ?></h4>

                  <div class="text-muted mb-1">
                    <!-- Lorem ipsum dolor sit amet, nibh suavitate qualisque ut nam. Ad harum primis electram duo, porro principes ei has. -->
                  </div>

                  <a href="javascript:void(0)" class="d-inline-block text-body">
                    <strong>ID_No: </strong>
                    <span class="text"><strong><?= $row['police_id'] ?></strong></span>
                  </a>
                </div>
              </div>
              <hr class="m-0">
            </div>
            <!-- Header -->
                                           <?php } }?>
            <div class="row">
              <div class="col">
             
                <!-- Info -->
                <div class="card mb-4">
                  <div class="card-body">
                  <p>
                      <strong>Police Officers Personal Information</strong>
                    </p>
                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">first_name:</div>
                      <div class="col-md-9">
                      <?= $row['first_name'] ?>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">middle_name:</div>
                      <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-body"><?= $row['middle_name'] ?></a>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">last_name:</div>
                      <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-body"><?= $row['last_name'] ?></a>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">date_of_birth:</div>
                      <div class="col-md-9">
                      <?= $row['date_of_birth'] ?>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">gender:</div>
                      <div class="col-md-9">
                      <?= $row['gender'] ?>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">nationality:</div>
                      <div class="col-md-9">
                      <?= $row['nationality'] ?>
                      </div>
                    </div>


                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">address:</div>
                      <div class="col-md-9">
                      <?= $row['address'] ?>
                      </div>
                    </div>


                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">city:</div>
                      <div class="col-md-9">
                      <?= $row['city'] ?>
                      </div>
                    </div>


                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">state:</div>
                      <div class="col-md-9">
                      <?= $row['state'] ?>
                      </div>
                    </div>

<!-- 
                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">phone:</div>
                      <div class="col-md-9">
                      <div class="col-md-9 col-5">
                                            <button id="basic" class="btn btn-outline-primary btn-lg btn-block">Basic
                                                Example</button>
                                        </div>
                      <?= $row['phone'] ?> 
                      </div>
                    </div> -->

                    <!-- <div class="row mb-2">
                      <div class="col-md-3 text-muted">signature_photo:</div>
                      <div class="col-md-9">
                      <?= $row['signature_photo'] ?>
                      </div>
                    </div> -->

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">previously_registered_station:</div>
                      <div class="col-md-9">
                      <?= $row['previously_registered_station'] ?>
                      </div>
                    </div>

                    <!-- <div class="row mb-2">
                      <div class="col-md-3 text-muted">id_document_photo:</div>
                      <div class="col-md-9">
                      <?= $row['id_document_photo'] ?>
                      </div>
                    </div> -->

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">currently_registered_station:</div>
                      <div class="col-md-9">
                      <?= $row['currently_registered_station'] ?>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">rank:</div>
                      <div class="col-md-9">
                      <?= $row['rank'] ?>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">position:</div>
                      <div class="col-md-9">
                      <?= $row['position'] ?>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">date_join_police:</div>
                      <div class="col-md-9">
                      <?= $row['date_join_police'] ?>
                      </div>
                    </div>

                    <!-- <div class="row mb-2">
                      <div class="col-md-3 text-muted">emergency_phone:</div>
                      <div class="col-md-9">
                      <?= $row['emergency_phone'] ?>
                      </div>
                    </div> -->
                  


                  </div>

                  <div class="card-footer text-center p-0">
                    <div class="row no-gutters row-bordered row-border-light">
                  
                  </div>
                </div>
                <style>
@media print{

  body *{
    visibility:hidden;
  }
  .print-container, .print-container *{
    visibility: visible;
  }
  .print-container{
    position:absolute;
    left:0;
    top:0px;
  }
}



                  </style>
              
                  </div>
               
                  <button  onclick="window.print();" class="btn btn-success">Print Document</button>
                    </div>
                </div>
                <!-- / Photos -->
               
                    </div>
              </div>
            </div>

          </div>
          <!-- / Content -->

          <!-- Layout footer -->
          <nav class="layout-footer footer bg-footer-theme">
            <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
              <div class="pt-3">
                <span class="footer-text font-weight-bolder">Appwork</span> ©
              </div>
              <div>
                <a href="javascript:void(0)" class="footer-link pt-3">About Us</a>
                <a href="javascript:void(0)" class="footer-link pt-3 ml-4">Help</a>
                <a href="javascript:void(0)" class="footer-link pt-3 ml-4">Contact</a>
                <a href="javascript:void(0)" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
              </div>
            </div>
          </nav>
          <!-- / Layout footer -->

        </div>
        <script>
// Get the img object using its Id
img = document.getElementById("img1");
// Function to increase image size
function enlargeImg() {
// Set image size to 1.5 times original
img.style.transform = "scale(5.5)";
// Animation effect
img.style.transition = "transform 0.25s ease";
}
// Function to reset image size
function resetImg() {
  // Set image size to original
img.style.transform = "scale(1)";
img.style.transition = "transform 0.25s ease";
}
</script>

<style type="text/css">
body{margin-top:20px;
background: #f5f5f5;
}
.theme-bg-white {
    background-color: #fff !important;
}
.ui-w-100 {
    width: 100px !important;
    height: auto;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}
.row-bordered>.col::before, .row-bordered>[class^="col-"]::before, .row-bordered>[class*=" col-"]::before, .row-bordered>[class^="col "]::before, .row-bordered>[class*=" col "]::before, .row-bordered>[class$=" col"]::before, .row-bordered>[class="col"]::before {
    content: "";
    position: absolute;
    right: 0;
    bottom: -1px;
    left: 0;
    display: block;
    height: 0;
    border-top: 1px solid rgba(24,28,33,0.06);
}
.row-bordered>.col::after, .row-bordered>[class^="col-"]::after, .row-bordered>[class*=" col-"]::after, .row-bordered>[class^="col "]::after, .row-bordered>[class*=" col "]::after, .row-bordered>[class$=" col"]::after, .row-bordered>[class="col"]::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: -1px;
    display: block;
    width: 0;
    border-left: 1px solid rgba(24,28,33,0.06);
}

.ui-bg-cover {
    background-color: rgba(0,0,0,0);
    background-position: center center;
    background-size: cover;
}

.ui-square {
    padding-top: 100% !important;
}
.ui-square, .ui-rect, .ui-rect-30, .ui-rect-60, .ui-rect-67, .ui-rect-75 {
    position: relative !important;
    display: block !important;
    padding-top: 100% !important;
    width: 100% !important;
}
</style>

<script type="text/javascript"></script>
      <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/extensions/sweetalert2.js"></script>
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>

    <script src="assets/js/main.js"></script>
   
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var imgs = document.getElementsByClassName("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
for (let i = 0, img; img = imgs[i]; i++) {
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>

</script>
</body>
</html>