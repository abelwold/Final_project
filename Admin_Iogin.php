<?php 
session_start();
include_once 'classes/Login_Class.php';
$log_in = new Login();
if (isset($_POST['submit'])) { 
		extract($_POST);   
	    $login = $log_in->check_login($email, $auto_password, $user_type);
	    if ($login) {
	        // Registration Success
        return true;
	    } else {
	        // Registration Failed 
	        $error_message =  '<div class="alert alert-danger">
            <strong>Wrong Username or Password</strong>.
          </div>';
	    }
	}
?>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.php"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
                    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<div class="alert alert-danger alert-dismissible fade show">
            <strong>'.$error.'</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
         };
      };
      ?><?php 
      if(isset($error_message)){
        echo '<span class="error-msg">'.$error_message.'</span>';
       } ?>
                    <form autocomplete="off"  method="POST">
                    <div class="form-group position-relative has-icon-left mb-4">
                                <div class="name">User Type</div>
                                <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="form-select" id="user_type" name="user_type" required>
                                        <option disabled selected>Choose...</option>
                                            <option value="Adminstrator">Adminstrator</option>
                                            <option value="User">User</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                 </div>
                                </div>
                    </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" name="email" placeholder="Username"autocomplete="new-password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="auto_password" placeholder="Password" autocomplete="new-password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="submit" onclick="return(submitlogin());" >Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="Register_New_User.php"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.php">Forgot password?</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>
<script>
      function submitlogin() {
        var form = document.login;
        if (form.user_type.value == "") {
          alert("Enter user type.");
          return false;
      }
    }
    </script>

</html>