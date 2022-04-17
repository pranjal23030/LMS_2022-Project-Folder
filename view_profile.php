<?php
    session_start();

    //Database connection
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms_project folder");

    //Variable Declaration
    $name = "";
    $contact = "";
    $email = "";
    $address = "";

    //Query
    $sql = "SELECT * from user where email = '$_SESSION[email]'";
    $run_sql = mysqli_query($connection,$sql);

    WHILE ($row = mysqli_fetch_assoc($run_sql)){
        $name = $row['name'];
        $contact = $row['contact'];
        $email = $row['email'];
        $address = $row['address'];
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Profile</title>
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
<br>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form >
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" value="<?php echo $name; ?>" disabled>
            </div>
            <div class="form-group">
                <label>Contact:</label>
                <input type="text" class="form-control" value="<?php echo $contact; ?>" disabled>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" value="<?php echo $email; ?>" disabled>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <textarea class="form-control" name="" id="" cols="30" rows="3" disabled><?php echo $address; ?></textarea>
            </div>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>

