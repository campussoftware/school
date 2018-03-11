<?php
session_start();
if(isset($_SESSION['studentportal']['id']) && $_REQUEST['logout']!=1)
{
	header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Student Login</title>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
<div class="row top-header">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h1>School ERP</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p class="pull-right">info@connectmyguru.com</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="body-container">
    <div class="col-md-6">
        <img src="images/school-erp.png" class="img-responsive module_banner">
    </div> 
    <div class="col-md-6">
        <div class="logo">
                <img src="images/logo.png" class="img-responsive">
            </div>
        <div class="card card-container">            
            <img id="profile-img" class="profile-img-card" src="images/login_default_img.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="error-admissionno" class="error"></span>
                <input type="admissionno" id="admissionno" class="form-control" autocomplete="off" placeholder="Admission No" required autofocus>
                <input type="password" id="inputPassword" class="form-control" autocomplete="off" placeholder="Password" required style="display:none" />
                <button class="btn btn-lg btn-primary btn-block btn-signin" id="loginsubmit" type="button">Sign in</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div>
    </div>
</div><!-- /container -->

    <div class="footer">
        <p>Copyright © 2017 <a href="www.weblozix.com">weblozix.com</a> . All Rights Reserved.</p>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/template.js"></script>
<script src="js/developer.js"></script>
</body>
</html>