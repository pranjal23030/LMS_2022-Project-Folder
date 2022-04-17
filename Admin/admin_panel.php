<?php
    session_start();
    require('functions.php');
    //Database connection
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms_project folder");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
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
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-4.0.0/dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="admin_style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="admin_index.php">Library Management System</a>
            <img src="fav.gif" height="50px" alt="DSS logo">
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

<!--Taken from bootstrap-->
<div class="container mt-3" style="background-color: white">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-center">
                <li class="nav-item">
                    <a href="admin_panel.php" class="nav-link" style="color: black">Panel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Books</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="add_new_book.php">Add new book</a>
                        <a class="dropdown-item" href="manage_books.php">Manage books</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="add_new_category.php">Add new category</a>
                        <a class="dropdown-item" href="manage_category.php">Manage category</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Author</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="add_author.php">Add new author</a>
                        <a class="dropdown-item" href="manage_author.php">Manage author</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="to_issue_books.php" class="nav-link" style="color: black">Issue Book</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<br> <br> <br> <br>
<div class="container-mt-3">
<div class="row">
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
            <div class="card-header">Registered Users</div>
            <div class="card-body">
                <p class="card-text">Total users: <?php echo get_total_user(); ?></p>
                <a href="registered_users.php" class="btn btn-danger" target="_blank">View Registered Users</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
            <div class="card-header">Available Books</div>
            <div class="card-body">
                <p class="card-text">Total available books: <?php echo get_total_books(); ?></p>
                <a href="available_books.php" class="btn btn-primary" target="_blank">View Available Books</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
            <div class="card-header">Registered Category </div>
            <div class="card-body">
                <p class="card-text">Total no. of Book's category: <?php echo get_total_books_category(); ?></p>
                <a href="book_category.php" class="btn btn-info" target="_blank">View Book Categories</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
            <div class="card-header">Registered Authors</div>
            <div class="card-body">
                <p class="card-text">Total available authors: <?php echo get_total_registered_authors(); ?> </p>
                <a href="registered_authors.php" class="btn btn-primary" target="_blank">View Authors</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
            <div class="card-header">Issued Books</div>
            <div class="card-body">
                <p class="card-text">Total Issued Books: <?php echo get_total_issued_books(); ?> </p>
                <a href="issued_books.php" class="btn btn-success" target="_blank">View Issued Books</a>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>



