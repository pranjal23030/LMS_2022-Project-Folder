<?php
    //Database connection
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms_project folder");

    $sql = "DELETE FROM category WHERE category_id= $_GET[id]";
    $sql_run = mysqli_query($connection, $sql);
?>
<script type="text/javascript">
    alert("Successfully deleted the category!");
    window.location.href = "manage_category.php"
</script>