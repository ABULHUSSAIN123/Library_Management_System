<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library_system");
    $query = "insert into user values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
    $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alart("Registration successfully.....You may login now.")
    window.location.href = "login.php";
</script>