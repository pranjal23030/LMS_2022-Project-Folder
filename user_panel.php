<?php
    session_start();
    //Created function to get the total number of books issued by the user
    function get_book_issued_by_user_count(){
        //Database connection
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"lms_project folder");

        $book_issued_by_user_count = 0;
        //Query
        $sql="SELECT COUNT(*) AS book_issued_by_user_count FROM issued_books WHERE student_id = $_SESSION[id]";
        $run_sql=mysqli_query($connection, $sql);
        WHILE ($row = mysqli_fetch_assoc($run_sql)) {
            $book_issued_by_user_count = $row['book_issued_by_user_count'];
        }
        return($book_issued_by_user_count);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Panel</title>
    <!--    Online Links-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <!--    Specified Links-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.0.0/dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="user_panel.php">Library Management System</a>
                <img src="Images/fav.gif" height="50px" alt="DSS logo">
            </div>
            <!-- Echoing name -->
            <font style="color: white">
                Welcome: <?php echo $_SESSION['name']; ?>
            </font>
            <!-- Echoing email -->
            <font style="color: white">
                Email: <?php echo $_SESSION['email']; ?>
            </font>

            <!-- Taken from bootstrap-->
            <div class="btn-group dropstart">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="view_profile.php">View</a></li>
                    <li><a class="dropdown-item" href="edit_profile.php">Edit </a></li>
                    <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
                </ul> &nbsp; &nbsp;
                <a href="logout.php" class="nav-link">Logout</a>
            </div>
        </div>
    </nav>

<br> <br>

    <div class="container-mt-3" >
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Issued Books</div>
                <div class="card-body">
                    <p class="card-text">Total issued books: <?php echo get_book_issued_by_user_count(); ?></p>
                    <a href="view_issued_books.php" class="btn btn-primary" target="_blank">View Issued Books</a>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>

    </div>
</body>
</html>

