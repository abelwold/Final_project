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
include_once 'classes/View_Registered_Data_Class.php';
include_once 'classes/Delete_Class.php';

?>


<head>

<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="path/to/jquery.js"></script>
    <script src="path/to/popper.js"></script>
    <script src="path/to/bootstrap.js"></script>
    <script src="path/to/bootstrap-confirmation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
</head>

</style>

<div id="main">


    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                            </div>

                            <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end"> -->
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Admin_Index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manage Registered Crime(Incident)
                                    Data</li>
                            </ol>
                            <!-- </nav>
                        </div> -->
                            <h1>Manage <span class="table-project-n">Registered Crime(Incident) Data</span></h1>

                        </div>

                    </div>

                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="n" data-editable="true"> ID</th>
                                        <th data-field="document_no" data-editable="true">Document No</th>
                                        <th data-field="title" data-editable="true">Title</th>
                                        <th data-field="first_name" data-editable="true">First Name</th>
                                        <th data-field="middel_name" data-editable="true">Middle Name</th>
                                        <th data-field="last_name">Last Name</th>
                                        <th data-field="phone" data-editable="true">Phone</th>
                                        <th data-field="address" data-editable="true">Address</th>
                                        <th data-field="addressTwo" data-editable="true">Address line 2</th>
                                        <th data-field="city" data-editable="true">City</th>
                                        <th data-field="statet" data-editable="true">State</th>
                                        <th data-field="zip_code" data-editable="true">Zip_Code</th>
                                        <th data-field="Date" data-editable="true">Created Date</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $students = new IncidentReporter;
                                        $result = $students->index('incident_reporter');
                                        if($result)
                                        {$count=0;
                                            foreach($result as $row)
                                            {$count++;
                                                ?>
                                    <tr>
                                        <td></td>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['document_no'] ?></td>
                                        <td><?= $row['title'] ?></td>
                                        <td><?= $row['first_name'] ?></td>
                                        <td><?= $row['middel_name'] ?></td>
                                        <td><?= $row['last_name'] ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><?= $row['address'] ?></td>
                                        <td><?= $row['addressTwo'] ?></td>
                                        <td><?= $row['city'] ?></td>
                                        <td><?= $row['state'] ?></td>
                                        <td><?= $row['zip_code'] ?></td>
                                        <td><?= $row['Date'] ?></td>


                                        <td class="buttons">
                                            <a href="View_Registered_Report_Data.php?id=<?=$row['document_no'];?>"
                                                class="btn btn-success"><i class="fa fa-eye"></i></a>
                                            <a href="Edit_Registered_Report.php?id=<?=$row['document_no'];?>"
                                                class="btn btn-warning" title="Edit"> <i
                                                    class="fa fa-pencil-square-o"></i></a>
                                            <button type="button" class="btn btn-danger"
                                                data-target="#modal_delete<?php  echo $count?>"
                                                data-toggle="modal"><span
                                                    class="glyphicon glyphicon-trash"></span></button>
                                        </td>

                                    </tr>
                                    <div class="modal fade" id="modal_delete<?php echo $count?>" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title">System</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <h4>Are you sure you want to delete this Data?</h4>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary"
                                                        data-dismiss="modal">No</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Yes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <head>

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="css_delete_modal/ionicons.min.css"> 
        <link rel="stylesheet" href="css_delete_modal/style.css">
    </head>

    <body>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close d-flex align-items-center justify-content-center"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="ion-ios-close"></span>
                        </button>
                    </div>
                    <div class="modal-body p-4 py-5 p-md-5">
                        <h3 class="text-center mb-3">Please Enter Your Cridentials to Delete Data</h3>
                        <form autocomplete="off" action="Delete_Data.php?id=<?php echo $row['document_no']?>"
                            method="post" enctype="multipart/form-data" class="signup-form">
                          
                            <div class="form-group mb-2">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" required autocomplete="off">
                            </div>
                            <div class="form-group mb-2">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="auto_password" required
                                    autocomplete="new-password">
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="form-control btn btn-success rounded submit px-3"
                                    data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" name="submit"
                                    class="form-control btn btn-danger rounded submit px-3">Delete Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/data-table/bootstrap-table.js"></script>
        <script src="js/data-table/tableExport.js"></script>
        <script src="js/data-table/data-table-active.js"></script>
        <script src="js/data-table/bootstrap-table-editable.js"></script>
        <script src="js/data-table/bootstrap-editable.js"></script>
        <script src="js/data-table/bootstrap-table-resizable.js"></script>
        <script src="js/data-table/colResizable-1.5.source.js"></script>
        <script src="js/data-table/bootstrap-table-export.js"></script>
