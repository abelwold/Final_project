<?php
session_start();
include_once '../classes/Login_Class.php';
include_once '../classes/Utilties.php';
$user = new Login();
if(empty($_SESSION))
{
  header("location:../Admin_Iogin.php");
}
else
{
print_r($_SESSION['login_user']);
$id = $_SESSION['id'];
$user->get_session_user($id);
}
$util = new Utilities;
include 'Sidebar.php';
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
       


<div id="main">
           
            <div class="page-heading">
                <h3>Welcom To RRCA System</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                <i class="fa fa-users" aria-hidden="true"></i>
                                                <!-- <i class="fa-solid fa-user-police"></i> -->

                                                <!-- <i class="fa-solid fa-mug-hot"></i> -->


                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Assigned Users</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $util->countData('user_form')?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                <i class="fa fa-address-card" aria-hidden="true"></i>

                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Police Officers</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $util->countData('register_police_officer')?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                <i class="fa fa-list-alt" aria-hidden="true"></i>

                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Reporst from web </h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $util->countData('crime_or_incident_from_website')?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                <i class="fa fa-user-secret" aria-hidden="true"></i>

                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Suspects</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $util->countData('suspected_person_detailes')?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
             
                        <div class="row">
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Assigned Users</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php   
                                                    $result =  $util->FetchLatestAssUsers('user_form');
                                                    foreach($result as $row){
                                                     ?> 
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="<?=$row['photo']?>">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?=$row['first_name']?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0"><?=$row['email']?></p>
                                                        </td>
                                                        <td class="col-auto">
                                                        <?php if ($row['id'] == $_SESSION['id']){
                                                                // $id = $_SESSION['id'];
                                                          echo  "<a href='#' class='btn btn-dark rounded-pill'>You</a>"."<img src='../assets/vendors/svg-loaders/rings.svg' class='me-4' style='width: 3rem'
                                                          alt='audio'>";
                                                        } ?>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Reported Crimes(Incidents)</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Type of Crime</th>
                                                        <th>Reported By</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php   
                                                    $result =  $util->FetchLatestAssUsers('crime_or_incident_from_website');
                                                    foreach($result as $row){
                                                     ?> 
                                                    <tr>
                                                    <td class="col-auto">
                                                            <p class=" mb-0"><?=$row['crime_type']?></p>
                                                        </td>
                                                        <td class="col-auto">
                                                        <p class=" mb-0"><?=$row['first_name']?></p>
                                                        </td>
                                                        <td class="col-auto">
                                                        <p class=" mb-0"><?=$row['created']?></p>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card" style="background-color:gold;">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <a href="Account_Settings.php"><img src="<?php echo $user->get_userImage($id) ?>" alt="Face 1"></a>
                                    </div>
                                    <div class="ms-3 name">
                                    <a href="Account_Settings.php" ><h6 class="font-bold">Account</h6>
                                        <h5 class="font-bold"><?php echo $user->get_fullname($id); ?></h5>
                                        <h6 class="text-muted mb-0"><?php echo $user->get_email($id); ?></h6></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Messages</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Dean Winchester</h5>
                                        <h6 class="text-muted mb-0">@imdean</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="assets/images/faces/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">John Dodol</h5>
                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                        Conversation</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
                      

    <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>

    <script src="../assets/js/main.js"></script>
</body>

</html>