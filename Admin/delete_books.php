<?php
    //Database connection
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms_project folder");

    $sql = "DELETE FROM books WHERE book_isbn_no= $_GET[id]";
    $sql_run = mysqli_query($connection, $sql);
    ?>
<script type="text/javascript">
    alert("Successfully deleted the book!");
    window.location.href = "manage_books.php"
</script>
