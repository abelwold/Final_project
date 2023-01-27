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
include 'sidebar.php';
include_once('classes/View_Registered_Data_Class.php');
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
	<!--  If you want to help us go here https://www.bootdey.com/help-us -->
    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div id="main">
<header class="mb-9">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>


            <div class="page-heading">
                <!-- <h3>Registered Crime(Incidents)</h3> -->
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Registered Crime(Incidents)</h3>
                            <p class="text-subtitle text-muted">Only to View Detailes of Registered Crime(Incident).</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                <p class="error"><?php echo @$register->error; ?></p>
                                    <li class="breadcrumb-item"><a href="Admin_Index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Registered Crime(Incidents)</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            
           
      

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <!-- /Breadcrumb -->
          <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'incident_reporter');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
          <div class="row gutters-sm  print-container">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <h2 class="mb-0">Reporter Name</h2><!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> -->
                    <div class="mt-3">
                      <h4><?=$row['first_name'];?>  <?=$row['last_name'];?></h4>
                      <h6 class="mb-0"><?=$row['document_no'];?></h6>
                      <!-- <p class="text-secondary mb-1">Full Stack Developer</p> -->
                      <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                      <!-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                </div>
              </div>
           
       
              <div class="card mt-3">
              <!-- <h3 class="mb-0">Reporter Name</h3> -->
                <ul class="list-group list-group-flush">
                <h2 class="mb-0 d-flex flex-column align-items-center text-center">Reporter Info Details</h2>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Title</h6>
                    <span class="text-secondary"><?=$row['title'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">First Name</h6>
                    <span class="text-secondary"><?=$row['first_name'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Middel Name</h6>
                    <span class="text-secondary"><?=$row['middel_name'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Last Name</h6>
                    <span class="text-secondary"><?=$row['last_name'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Phone</h6>
                    <span class="text-secondary"><?=$row['phone'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Address</h6>
                    <span class="text-secondary"><?=$row['address'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Address Line 2</h6>
                    <span class="text-secondary"><?=$row['addressTwo'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">City</h6>
                    <span class="text-secondary"><?=$row['city'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">State</h6>
                    <span class="text-secondary"><?=$row['state'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Zip-Code</h6>
                    <span class="text-secondary"><?=$row['zip_code'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                   
                  </li>
                  
                </ul>
              </div>
            </div>
            <?php } }?>

            <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'registeree');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>
            <div class="col-md-8">
              <div class="card mb-3">
              <h2 class="mb-0 d-flex flex-column align-items-center text-center">Report Details</h2>
                <div class="card-body">
                <!-- <h2 class="mb-0">rank</h2> -->
                  <div class="row">
                  
                    <div class="col-sm-3">
                      <h6 class="mb-0">Rank</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['rank'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Identification No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['identification_no'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Officer First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['first_name_registeree'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Officer Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['last_name_registeree'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Registered Date</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['date'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Type of crime</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['crime_type'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Incident Location</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['incident_location'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nature Incident</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['nature_incident'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Incident Details</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['incident_details'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Incident Motivated</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['incident_motivated'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Is Case Report Before</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['report_before'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Any Person Arreseted</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['arreseted'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Crime(Incident)</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['date_of_incident'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Evidence</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php 
                    $string =  $row['evidence'];
                    $str = explode(',', $string);
                    foreach($str as $s){
                      $strg = str_replace(' ','',$s); 
                      echo "<table>
                      <tr>
                        <th>File(s)</th>
                      </tr>
                      <tr>
                        <td><a href='download.php?id=$strg' class='btn btn-primary'>Download</a></td>
                      </tr>
                    </table> ";
                    }
                    ?>
 
                    </div>
                  </div>
     

              <!-- <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

<?php } }?>
              <button  onclick="window.print();" class="btn btn-success">Print Document</button>
            </div>
          </div>

        </div>
    </div>

<style type="text/css">
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
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>