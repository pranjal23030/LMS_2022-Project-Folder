<?php
    function get_total_user(){
        //Database connection
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"lms_project folder");

        //Variable
        $user_count = "";

        $sql = "SELECT count(*) AS user_count FROM user";
        $run_sql = mysqli_query($connection, $sql);
        WHILE ($row = mysqli_fetch_assoc($run_sql)) {
            $user_count = $row['user_count'];
        }
        return($user_count);
    }

    function get_total_books(){
        //Database connection
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"lms_project folder");

        //Variable
        $book_count = "";

        $sql = "SELECT count(*) AS book_count FROM books";
        $run_sql = mysqli_query($connection, $sql);
        WHILE ($row = mysqli_fetch_assoc($run_sql)) {
            $book_count = $row['book_count'];
        }
        return($book_count);
    }

    function get_total_books_category(){
        //Database connection
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"lms_project folder");

        //Variable
        $book_category = "";

        $sql = "SELECT count(*) AS book_category FROM category";
        $run_sql = mysqli_query($connection, $sql);
        WHILE ($row = mysqli_fetch_assoc($run_sql)) {
            $book_category = $row['book_category'];
        }
        return($book_category);
    }

    function get_total_registered_authors(){
        //Database connection
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"lms_project folder");

        //Variable
        $registered_authors = "";

        $sql = "SELECT count(*) AS registered_authors FROM authors";
        $run_sql = mysqli_query($connection, $sql);
        WHILE ($row = mysqli_fetch_assoc($run_sql)) {
            $registered_authors = $row['registered_authors'];
        }
        return($registered_authors);
    }

    function get_total_issued_books(){
        //Database connection
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"lms_project folder");

        //Variable
        $issued_books = "";

        $sql = "SELECT count(*) AS issued_books FROM issued_books";
        $run_sql = mysqli_query($connection, $sql);
        WHILE ($row = mysqli_fetch_assoc($run_sql)) {
            $issued_books = $row['issued_books'];
        }
        return($issued_books);
    }

?>