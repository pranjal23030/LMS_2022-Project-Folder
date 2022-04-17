<?php
    session_start();
    //Database connection
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms_project folder");

    $password = "";
    $sql = "SELECT * from admin WHERE email = '$_SESSION[email]'";
    $sql_run = mysqli_query($connection,$sql);
    while($row = mysqli_fetch_assoc($sql_run)){
        $password = $row['password'];
    }
    if($password == $_POST['old_password']){
        $sql = "UPDATE admin SET password = '$_POST[new_password]' where email = '$_SESSION[email]'";
        $sql_run = mysqli_query($connection,$sql);
    }
?>
<script type="text/javascript">
    alert("Password updated successfully...");
    window.location.href = "admin_panel.php";
</script>

