<?php
    //Database connection
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms_project folder");


    //Query
    $sql = "UPDATE user SET name ='$_POST[name]', contact ='$_POST[contact]', email ='$_POST[email]', address ='$_POST[address]'";
    $run_sql = mysqli_query($connection,$sql);
    ?>
<script type="text/javascript">
    alert ("Updated successfully!!");
    window.location.href = "user_panel.php";
</script>