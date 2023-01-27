<?php
session_start();
include_once 'classes/Login_Class.php';
include_once 'classes/View_Registered_Data_Class.php';
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

    .myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
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
    .modal-content,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
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
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
    </style>
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


        <div class="page-heading">
                <!-- <h3>Registered Crime(Incidents)</h3> -->
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Registered Suspects Details</h3>
                            <p class="text-subtitle text-muted">Only to View Detailes of Registered Suspects Details.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                <p class="error"><?php echo @$register->error; ?></p>
                                    <li class="breadcrumb-item"><a href="Admin_Index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Registered Suspects Details</li>
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
            <div class="layout-content">

                <!-- Content -->
                <div class="container flex-grow-1 container-p-y">

                    <!-- Header -->
                    <div class="container-m-nx container-m-ny theme-bg-white mb-4">
                        <div class="media col-md-10 col-lg-8 col-xl-7 py-5 mx-auto">
                            <img src="<?= $row['passport_photo']?>" alt="" class="d-block ui-w-100 rounded-circle">
                            <div class="media-body ml-5">
                                <h4 class="font-weight-bold mb-4"><?= $row['first_name'] ?> <?= $row['middle_name'] ?>
                                    <?= $row['last_name'] ?></h4>

                                <div class="text-muted mb-1">
                                    <!-- Lorem ipsum dolor sit amet, nibh suavitate qualisque ut nam. Ad harum primis electram duo, porro principes ei has. -->
                                </div>

                                <a href="javascript:void(0)" class="d-inline-block text-body">
                                    <strong>File_No</strong>
                                    <span class="text"><strong><?= $row['document_no'] ?></strong></span>
                                </a>
                            </div>
                        </div>
                        <hr class="m-0">
                    </div>
                    <!-- Header -->
                    <?php } }?>
                    <div class="row print-container">
                        <div class="col">

                            <!-- Info -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <p>
                                        <strong>Criminal Personal Information</strong>
                                    </p>
                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">First Name:</div>
                                        <div class="col-md-9">
                                            <?= $row['first_name'] ?>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Middle Name:</div>
                                        <div class="col-md-9">
                                            <a href="javascript:void(0)"
                                                class="text-body"><?= $row['middle_name'] ?></a>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Last Name:</div>
                                        <div class="col-md-9">
                                            <a href="javascript:void(0)" class="text-body"><?= $row['last_name'] ?></a>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Date of Birth:</div>
                                        <div class="col-md-9">
                                            <?= $row['date_of_birth'] ?>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Marital Status:</div>
                                        <div class="col-md-9">
                                            <?= $row['marital_status'] ?>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Resident Address:</div>
                                        <div class="col-md-9">
                                            <?= $row['resident_address'] ?>
                                        </div>
                                    </div>


                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">City:</div>
                                        <div class="col-md-9">
                                            <?= $row['city'] ?>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">State:</div>
                                        <div class="col-md-9">
                                            <?= $row['state'] ?>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Phone:</div>
                                        <div class="col-md-9">
                                            <?= $row['phone'] ?>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">ID Document Type:</div>
                                        <div class="col-md-9">
                                            <?= $row['Id_document_type'] ?>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Hight:</div>
                                        <div class="col-md-9">
                                            <?= $row['hight'] ?>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Weight:</div>
                                        <div class="col-md-9">
                                            <?= $row['weight'] ?>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Eye Color:</div>
                                        <div class="col-md-9">
                                            <?= $row['eye_color'] ?>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Hair Color:</div>
                                        <div class="col-md-9">
                                            <?= $row['hair_color'] ?>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3 text-muted">Emergency Phone:</div>
                                        <div class="col-md-9">
                                            <?= $row['emergency_phone'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center p-0">
                                    <div class="row no-gutters row-bordered row-border-light">

                                    </div>
                                </div>
                                <style>
                                @media print {

                                    body * {
                                        visibility: hidden;
                                    }

                                    .print-container,
                                    .print-container * {
                                        visibility: visible;
                                    }

                                    .print-container {
                                        position: absolute;
                                        left: 0;
                                        top: 0px;
                                    }
                                }
                                </style>

                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="ui-bordered">
                                            <p>
                                                <strong>Identification Documents</strong>
                                            </p>
                                            <div
                                                class="d-flex justify-content-start align-items-end ui-rect-content p-2">
                                                <a href="javascript:void(0)"
                                                    class="d-flex col-4 col-sm-3 col-md-4 flex-column align-items-center text-body py-3 px-2">
                                                    <img src="<?= $row['passport_photo'] ?>" alt=""
                                                        class="d-block ui-w-40 rounded-circle mb-6 myImg"
                                                        onclick="enlargeImg()">
                                                    <div class="text-center small">Passport Size Photo</div>
                                                </a>

                                                <div id="myModal" class="modal">
                                                    <span class="close">&times;</span>
                                                    <img class="modal-content" id="img01">
                                                    <div id="caption"></div>
                                                </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex col-4 col-sm-3 col-md-4 flex-column align-items-center text-body py-3 px-2">
                                                    <img src="<?= $row['signature_photo'] ?>" alt=""
                                                        class="d-block ui-w-40 rounded-circle mb-6 myImg">
                                                    <div class="text-center small">Signature Photo</div>
                                                    <div id="myModal" class="modal">
                                                        <span class="close">&times;</span>
                                                        <img class="modal-content" id="img02">
                                                        <div id="caption"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex col-4 col-sm-3 col-md-4 flex-column align-items-center text-body py-3 px-2">
                                                    <img src="<?= $row['id_document_photo'] ?>" alt=""
                                                        class="d-block ui-w-40 rounded-circle mb-6 myImg">
                                                    <div class="text-center small">ID Document Photo</div>
                                                    <div id="myModal" class="modal">
                                                        <span class="close">&times;</span>
                                                        <img class="modal-content" id="img02">
                                                        <div id="caption"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header with-elements">
                                <p>
                                    <strong>Download Files</strong>
                                </p>
                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Passport Size Photo:</div>
                                    <div class="col-md-9">
                                        <a href='download_suspects_documents.php?id=<?= $row['passport_photo'] ?>'
                                            class='btn btn-primary'>Download</a>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Signature Photo:</div>
                                    <div class="col-md-9">
                                        <a href='download_suspects_documents.php?id=<?= $row['signature_photo'] ?>'
                                            class='btn btn-primary'>Download</a>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Identification Document:</div>
                                    <div class="col-md-9">
                                        <a href='download_suspects_documents.php?id=<?= $row['id_document_photo'] ?>'
                                            class='btn btn-primary'>Download</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'details_of_offence');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>

                        <div class="card mb-4">
                            <div class="card-header with-elements">
                                <p>
                                    <strong>Offense Information</strong>
                                </p>
                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Date of Court Appearance:</div>
                                    <div class="col-md-9">
                                        <?= $row['date_of_court_appearance'] ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Location of Court:</div>
                                    <div class="col-md-9">
                                        <a href="javascript:void(0)"
                                            class="text-body"><?= $row['location_of_court'] ?></a>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Nature of Offence:</div>
                                    <div class="col-md-9">
                                        <a href="javascript:void(0)"
                                            class="text-body"><?= $row['Nature_of_offence'] ?></a>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Date of Offence:</div>
                                    <div class="col-md-9">
                                        <a href="javascript:void(0)"
                                            class="text-body"><?= $row['date_of_offence'] ?></a>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Location of Offence:</div>
                                    <div class="col-md-9">
                                        <a href="javascript:void(0)"
                                            class="text-body"><?= $row['location_of_offence'] ?></a>
                                    </div>
                                    <?php } }?>
                                </div>
                            </div>
                        </div>
                        <?php
                                        $students = new IncidentReporter;
                                        $result = $students->indexWithSpecificId($_GET['id'],'investigating_officer_form');
                                        if($result)
                                        {
                                            foreach($result as $row)
                                            {
                                                ?>

                        <div class="card mb-4">
                            <div class="card-header with-elements">
                                <p>
                                    <strong>Investigator Information</strong>
                                </p>
                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Investigator First Name:</div>
                                    <div class="col-md-9">
                                        <?= $row['Investigating_off_first_name'] ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Investigator Last Name:</div>
                                    <div class="col-md-9">
                                        <a href="javascript:void(0)"
                                            class="text-body"><?= $row['Investigating_off_last_name'] ?></a>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 text-muted">Investigator ID:</div>
                                    <div class="col-md-9">
                                        <a href="javascript:void(0)"
                                            class="text-body"><?= $row['Investigating_off_id'] ?></a>
                                    </div>
                                </div>
                                <?php } }?>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>


    <button onclick="window.print();" class="btn btn-success">Print Document</button>
    </div>
    </div>


    </div>
    </div>
    </div>

    </div>




    </div>
    <script>
    img = document.getElementById("img1");

    function enlargeImg() {

        img.style.transform = "scale(5.5)";

        img.style.transition = "transform 0.25s ease";
    }

    function resetImg() {

        img.style.transform = "scale(1)";
        img.style.transition = "transform 0.25s ease";
    }
    </script>

    <style type="text/css">
    body {
        margin-top: 20px;
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

    .row-bordered>.col::before,
    .row-bordered>[class^="col-"]::before,
    .row-bordered>[class*=" col-"]::before,
    .row-bordered>[class^="col "]::before,
    .row-bordered>[class*=" col "]::before,
    .row-bordered>[class$=" col"]::before,
    .row-bordered>[class="col"]::before {
        content: "";
        position: absolute;
        right: 0;
        bottom: -1px;
        left: 0;
        display: block;
        height: 0;
        border-top: 1px solid rgba(24, 28, 33, 0.06);
    }

    .row-bordered>.col::after,
    .row-bordered>[class^="col-"]::after,
    .row-bordered>[class*=" col-"]::after,
    .row-bordered>[class^="col "]::after,
    .row-bordered>[class*=" col "]::after,
    .row-bordered>[class$=" col"]::after,
    .row-bordered>[class="col"]::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: -1px;
        display: block;
        width: 0;
        border-left: 1px solid rgba(24, 28, 33, 0.06);
    }

    .ui-bg-cover {
        background-color: rgba(0, 0, 0, 0);
        background-position: center center;
        background-size: cover;
    }

    .ui-square {
        padding-top: 100% !important;
    }

    .ui-square,
    .ui-rect,
    .ui-rect-30,
    .ui-rect-60,
    .ui-rect-67,
    .ui-rect-75 {
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
    var modal = document.getElementById("myModal");


    var imgs = document.getElementsByClassName("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    for (let i = 0, img; img = imgs[i]; i++) {
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
    }


    var span = document.getElementsByClassName("close")[0];


    span.onclick = function() {
        modal.style.display = "none";
    }
    </script>

    </script>
</body>

</html>