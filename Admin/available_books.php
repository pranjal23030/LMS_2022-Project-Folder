<?php
    session_start();
    require('functions.php');
    //Database connection
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms_project folder");

    //Variables
    $book_name = "";
    $author = "";
    $category = "";
    $book_isbn_no="";
    $book_price = "";

    //Query
    $sql = "SELECT books.book_name, books.book_isbn_no, books.book_price, authors.author_name FROM books LEFT JOIN authors ON books.author_id = authors.author_id";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Available Books</title>
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
            <a class="navbar-brand" href="admin_panel.php">Library Management System</a>
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
<br> <br>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="">
            <table class="table table-hover table-bordered" width="900px" style="text-align: center">
                <tr>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>ISBN No.</th>
                </tr>
                <?php
                    $run_sql = mysqli_query($connection, $sql);
                    WHILE ($row = mysqli_fetch_assoc($run_sql)){
                        $book_name = $row['book_name'];
                        $author_name = $row['author_name'];
                        $book_price = $row['book_price'];
                        $book_isbn_no = $row['book_isbn_no'];
                        ?>
                        <tr>
                            <td><?php echo $book_name;?></td>
                            <td><?php echo $author_name;?></td>
                            <td><?php echo $book_price;?></td>
                            <td><?php echo $book_isbn_no;?></td>
                        </tr> <?php
                    }
                ?>
            </table>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
</body>
</html>

