<?php
    //Database connection
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, "lms_project folder");

    //Query for Data insertion
    $sql = "INSERT INTO user VALUES(null, '$_POST[name]','$_POST[email]','$_POST[password]',$_POST[contact],'$_POST[address]')";
    $run_sql = mysqli_query($connection,$sql);
?>

<!--When the user registers, the following message is shown and the user is directed towards the login page!!-->
<script type="text/javascript">
    alert("Registration successful! You can login now.");
    window.location.href = "index.php";
</script>