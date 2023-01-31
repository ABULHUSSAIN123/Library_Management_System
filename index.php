<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>

        #side_bar{
            background-color: whitesmoke;
            padding: 50px;
            width: 300px;
            height: 450px
        }

    body{
        background-size: cover;
        background: url(background.jpg);
        background-size: 100%;
        
    }

    .login-form-3 .btnSubmit {
    font-weight: 600;
    color: #0062cc;
    background-color: lightblue;
}

.login-form-3 h3 {
    text-align: center;
    color: black;
}

.login-form-1 h3 {
    text-align: center;
    color: black;
}
.login-form-3 {
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}

    </style>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student.php">student Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Register Login</a>
                </li>
            </ul>
        </div>
    </nav><br>
    <span><marquee><h3>This is Library Management System. Library Opens at 8:00 AM and close at 8:00 PM</h3></marquee></span><br><br>
    <div class="row">
        <div class="col-md-4" id="side_bar">
            <h5>Library Timing</h5>
            <ul>
                <li>Opening Timing: 8:00 AM</li>
                <li>Closing Timing: 8:00 PM</li>
                <li>(Sunday Off)</li>
            </ul>
            <h5>What We Provide?</h5>
            <ul>
                <li>Full Furniture</li>
                <li>Free Wi-Fi</li>
                <li>News Papers</li>
                <li>Discussion Room</li>
                <li>Water</li>
                <li>Peacefull Environment</li>
            </ul>
        </div>
        <div class="col-md-8" id="main_content">
        <center><h3>User Registration Form</h3></center>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Email ID:</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Type:</label>
                <input type="text" name="type" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    </div>

<?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>
        <script src="" async defer></script>
    </body>
</html>
