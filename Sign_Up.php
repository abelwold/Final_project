<?php
include_once 'classes/Register_New_User_Class.php';
if (isset($_POST['submit'])){
        extract($_POST);
if($_FILES['photo']['error']==0){
    $register = new Register_new_user($_FILES,$identification_no,$first_name, $last_name, $rank,$address,$gender,$email,$phone,$region,$country,$user_type);
}
    }
?>
<html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">

    <!-- Title Page-->
    <title>Police agent registeration Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registration Form</h2>
</div>
       <p class="error"><?php echo @$register->error;?></p>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                        
                            <div class="name">Identification No</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="form-control form-control" type="text" name="identification_no" autocomplete="off" required>
                                    <label class="label--desc">Identification No</label>
                                </div>
                            </div>
                        
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input  class="form-control form-control" type="text" autocomplete="off" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input  class="form-control form-control" type="text" autocomplete="off" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Rank</div>
                                    <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="form-select" id="rank" name="rank">
                                            <option disabled="disabled" name="rank" selected="selected">Choose option</option>
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
                            <div class="select-dropdown"></div>
                            <label class="label--desc">Rank</label>
                        </div>
                            </div>
                                </div>
                                </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input  class="form-control form-control" type="text" autocomplete="off" name="address">
                                    <label class="label--desc">Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Gender</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Male
                                    <input type="radio" value="male" name="gender">
                                    <span class="checkmark"></span>
                                </label>
                                <label name="gender" class="radio-container">Female
                                    <input type="radio" value="female" name="gender">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="form-control form-control" type="email" autocomplete="off" name="email">
                                    <label class="label--desc">Email</label>
                                </div>
                            </div>
                           
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="form-control form-control" type="text" autocomplete="off" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Region/State</div>
                                    <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="form-select" id="user_type" name="region">
                                            <option disabled="disabled" name="user_type" selected="selected">Choose option</option>
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
                            <div class="select-dropdown"></div>
                            <label class="label--desc">Region/State</label>
                        </div>
                            </div>
                                </div>
                                </div>
                        <div class="form-row m-b-55">
                            <div class="name">Country</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="form-control form-control" type="text" autocomplete="off" name="country">
                                            <label class="label--desc">Country</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Photo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input  class="form-control form-control" type="file" name="photo" value="/img" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">User Type</div>
                                    <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="form-select" id="user_type" name="user_type">
                                            <option disabled="disabled" name="user_type" selected="selected">Choose option</option>
                                <option value="Adminstrator">Adminstrator</option>
                                <option value="User">User</option>
                            </select>
                            <div class="select-dropdown"></div>
                            <label class="label--desc">User Type</label>
                        </div>
                            </div>
                          
                                </div>
                                
                                </div>
                                
                        <div>
                            <button  name="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Register</button>
                        </div>
                        <div class="text-center mt-5 text-lg fs-4">
                            <p class='text-gray-600'>Already have an account? <a href="oop_login.php"
                                    class="font-bold">Log
                                    in</a>.</p>
                                   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->