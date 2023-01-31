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
    <body >

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



<div class="container login-container">
<div class="row"><h4><?php echo $msg?></h4></div>
            <div class="row">
 
                <div class="col-md-9 login-form-3">
                    <h3>Admin Login</h3>
                    <form action="loginadmin_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $ademailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $adpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <!-- <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                    </form>
                </div>
                </div>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>