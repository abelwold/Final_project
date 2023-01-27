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
include_once 'classes/Update_User_Data_Class.php';
$user = new Update_User_Data_Class();
$id = $_SESSION['id'];

 if(isset($_POST['delete'])){
    $email = $_POST['email'];
     $stmt =DatabaseConnection::getInstance()->prepare("SELECT email,auto_password FROM user_form WHERE id = '$id'");
            $stmt->execute();
            $result =  $stmt->fetchAll();
            foreach($result as $row){
                print_r($row['email']);
                if ($row['email'] != $_POST['email'] || $row['auto_password'] != $_POST['auto_password'] ) {
                    
                    $error =  '<div class="alert alert-danger alert-dismissible fade show">
                    <strong>Wrong Credentials!</strong> A problem has been occurred while trying to <strong>Deactivate</strong> your account.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>';
 }else{
    $user->deactivate_account($id);
 }
}
}
if (isset($_POST['submit'])) {
    $user->update_user_data($id,'identification_no','first_name','last_name','rank','address','gender','email','phone','region','country','user_type','auto_password'); 
}
if (isset($_FILES['new_photo']['name']) and !empty($_FILES['new_photo']['name'])) {
    $g = $user->recordImage($id,$_FILES,'previous');
}
include 'Sidebar.php';
?>
<link rel="stylesheet" href="style3.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="path/to/jquery.js"></script>
<script src="path/to/popper.js"></script>
<script src="path/to/bootstrap.js"></script>
<script src="path/to/bootstrap-confirmation.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <p class="error"><?php echo @$user->error; ?></p>
    <p class="error"><?php echo @$error; ?></p>
    <form enctype="multipart/form-data" method="post">
        <div class="wrapper bg-white mt-sm-7">
            <h4 class="pb-6 border-bottom">Account settings</h4>

            <div class="form-group">
                <h3>Current Photo</h3>
                <div class="d-flex align-items-start py-3 border-bottom">
                    <a href="Download_Police_Officers_Picture.php?id=<?=$user->get_userImage($id) ?>">
                        <img src="<?php $user->get_userImage($id) ?>" alt="" class="img">
                        Download</a>

                </div>
                <input type="hidden" name="previous" id="previous" value="<?php $user->get_userImage($id) ?>" />
                <h3>New Photo</h3>
                <input type="file" class="form-control" name="new_photo" id="new_photo"
                    value="<?php $user->get_userImage($id) ?>" />
            </div>
            <div class="col-md-6"> <label for="firstname">Identification No</label> <input type="text"
                    name="identification_no" class="bg-light form-control"
                    value="<?php echo $user->get_stored_data($id,'identification_no') ;?> " required="required"> </div>
            <div class="py-2">
                <div class="col-md-6 pt-md-0 pt-3"> <label for="language">Rank</label>
                    <div class="arrow">
                        <select name="rank" class="bg-light" required>
                            <option selected="selected"><?php echo $user->get_stored_data($id,'rank') ;?></option>
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
                    </div>
                </div>
                <div class="row py-2">


                    <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text"
                            name="first_name" class="bg-light form-control"
                            value="<?php echo $user->get_stored_data($id,'first_name') ;?> " required> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text"
                            name="last_name" class="bg-light form-control"
                            value="<?php echo $user->get_stored_data($id,'last_name') ;?> "> </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="email">Address</label> <input type="text" name="address"
                            class="bg-light form-control" value="<?php echo $user->get_stored_data($id,'address') ;?> "
                            required> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="text"
                            name="phone" class="bg-light form-control"
                            value="<?php echo $user->get_stored_data($id,'phone') ;?> "> </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" name="email"
                            class="bg-light form-control" value="<?php echo $user->get_stored_data($id,'email') ;?> "
                            required> </div>
                    <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">Gender</label>
                        <div class="arrow">
                            <select id="gender" name="gender" class="bg-light" required>
                                <option selected><?php echo $user->get_stored_data($id,'gender') ;?></option>

                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">Region</label>
                        <div class="arrow">
                            <select id="region" name="region" class="bg-light" required>
                                <option selected><?php echo $user->get_stored_data($id,'region') ;?></option>
                                <option value="Tigray">Tigray</option>
                                <option value="Afar">Afar</option>
                                <option value="Amhara">Amhara</option>
                                <option value="Oromia">Oromia</option>
                                <option value="Somali">Somali</option>
                                <option value="Benishangul-Gumuz">Benishangul-Gumuz</option>
                                <option value="Southern Nations">Southern Nations</option>
                                <option value="Nationalities and Peoples Region (SNNPR)">Nationalities and Peoples
                                    Region (SNNPR)</option>
                                <option value="Gambella">Gambella</option>
                                <option value="Harari ">Harari </option>
                                <option value="Addis Ababa">Addis Ababa</option>
                                <option value="Dire Dawa">Dire Dawa</option>
                            </select>
                        </div>

                    </div>
                    <div class="row py-2">
                        <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Country</label> <input type="text"
                                name="country" class="bg-light form-control"
                                value="<?php echo $user->get_stored_data($id,'country') ;?> " required> </div>
                        <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Password</label> <input type="text"
                                name="auto_password" class="bg-light form-control"
                                value="<?php echo $user->get_stored_data($id,'auto_password') ;?> " required> </div>
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">User Type</label>
                        <div class="arrow">
                            <select id="user_type" name="user_type" class="bg-light" required>
                                <option selected><?php echo $user->get_stored_data($id,'user_type') ;?></option>
                                <option value="Adminstrator">Adminstrator</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="py-3 pb-4 border-bottom">
                    <button type="submit" name="submit" class="btn btn-primary mr-3">Save Changes</button>
                    <button type="reset" class="btn border button">Cancel</button>
                </div>
                </form>
    <div class="d-sm-flex align-items-center pt-3" id="deactivate">
        <div> <b>Deactivate your account</b>
            <p>Details about your account and password</p>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-danger" data-target="#modal_delete" data-toggle="modal"><span
                    class="glyphicon glyphicon-trash"></span>Deactivate</button>
            <div class="modal fade" id="modal_delete" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">System</h3>
                        </div>
                        <div class="modal-body">
                            <center>
                                <h4>Are you sure you want to <strong>Deactivate</strong> your account?</h4>
                            </center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#exampleModalCenter">Yes
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <form action="" method="post" enctype="multipart/form-data">

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                       
                    </div>
                    <div class="modal-body p-4 py-5 p-md-5">
                        <h3 class="text-center mb-3">Please Enter Your Cridentials to <strong>Deactivate</strong> your
                            account</h3>


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
                            <button type="submit" name="delete" class="btn btn-sm btn-danger">Deactivate</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>

</div>
</form>

