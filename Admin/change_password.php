<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
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


<br>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="update_password.php" method="post">
            <div class="form-group0">
                <label>Current Password: </label>
                <input type="password" name="old_password" class="form-control">
            </div>
            <br>
            <div class="form-group0">
                <label>New Password: </label>
                <input type="password" name="new_password" class="form-control">
            </div>
            <br>
            <button type="submit"  name="update" class="btn btn-dark">Update Password</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>



