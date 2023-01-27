<?php
session_start();
include_once 'classes/Login_Class.php';
include_once 'classes/Utilties.php';
$user = new Login();
if(empty($_SESSION['login_admin']))
{
  header("location:Admin_Iogin.php");
}
else
{
print_r($_SESSION['login_admin']);
$id = $_SESSION['id'];
$user->get_session_admin($id);
}

$util = new Utilities;
include 'sidebar.php';
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>



<div id="main">

<div class="card-header">
    <div class="page-heading">
        <h3 class="card-title">Welcom To RRCA System</h3>
    </div>
</div>

    <!-- <div class="card-header"> -->
        <!-- <h4 class="card-title">Split Dropdowns</h4> -->

        <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h4>Track Your Data</h4>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                        <div class="btn-group dropdown me-1 mb-1">
            <button type="button" class="btn btn-success">New Notification <span
                    class="label label-pill label-danger count" style="border-radius:10px; "></span> <span
                    class="fa fa-envelope" style="font-size:20px;"></span></button>
            <button type="button" class="btn btn-success dropdown dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            </span> <button data-toggle="dropdown" class="fa fa-check drop-toggle"></button>
            <div class="dropdown-menu">
                <h6 class="dropdown-header">Header</h6>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- <div class="btn-group dropdown me-1 mb-1 col-12 col-md-6 order-md-2 order-first">
            <button type="button" class="btn btn-success">New Notification <span
                    class="label label-pill label-danger count" style="border-radius:10px; "></span> <span
                    class="fa fa-envelope" style="font-size:20px;"></span></button>
            <button type="button" class="btn btn-success dropdown dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            </span> <button data-toggle="dropdown" class="fa fa-check drop-toggle"></button>
            <div class="dropdown-menu">
                <h6 class="dropdown-header">Header</h6>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div> -->

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
                                        <h6 class="font-extrabold mb-0">
                                            <?php echo $util->countData('register_police_officer')?></h6>
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
                                        <h6 class="font-extrabold mb-0">
                                            <?php echo $util->countData('crime_or_incident_from_website')?></h6>
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
                                        <h6 class="font-extrabold mb-0">
                                            <?php echo $util->countData('suspected_person_detailes')?></h6>
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
                                                          echo  "<a href='#' class='btn btn-dark rounded-pill'>You</a>"."<img src='assets/vendors/svg-loaders/rings.svg' class='me-4' style='width: 3rem'
                                                          alt='audio'>";
                                                        } ?>
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
                                <a href="Account_Settings.php"><img src="<?php echo $user->get_userImage($id) ?>"
                                        alt="Face 1"></a>
                            </div>
                            <div class="ms-3 name">
                                <a href="Account_Settings.php">
                                    <h6 class="font-bold">Account</h6>
                                    <h5 class="font-bold"><?php echo $user->get_fullname($id); ?></h5>
                                    <h6 class="text-muted mb-0"><?php echo $user->get_email($id); ?></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!-- <div class="container">

                <form method="post" id="comment_form">
                    <div class="form-group">
                        <label>Enter Subject</label>
                        <input type="text" name="incident_location" id="incident_location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Enter Comment</label>
                        <textarea name="nature_incident" id="nature_incident" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
                    </div>
                </form>
            </div> -->
        </section>
    </div>
</div>


<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

<script src="assets/js/main.js"></script>

<script>
$(document).ready(function() {

    function load_unseen_notification(view = '') {
        $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
                view: view
            },
            dataType: "json",
            success: function(data) {
                $('.dropdown-menu').html(data.notification);
                if (data.unseen_notification > 0) {
                    $('.count').html(data.unseen_notification);
                }
            }
        });
    }

    load_unseen_notification();

    $('#comment_form').on('submit', function(event) {
        event.preventDefault();
        if ($('#incident_location').val() != '' && $('#nature_incident').val() != '') {
            var form_data = $(this).serialize();
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: form_data,
                success: function(data) {
                    $('#comment_form')[0].reset();
                    load_unseen_notification();
                }
            });
        } else {
            alert("Both Fields are Required");
        }
    });

    $(document).on('click', '.drop-toggle', function() {
        $('.count').html('');
        load_unseen_notification('yes');
    });

    setInterval(function() {
        load_unseen_notification();;
    }, 5000);

});
</script>
</body>

</html>