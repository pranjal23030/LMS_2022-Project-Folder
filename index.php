<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Management System</title>
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
<!--    Taken From Bootstrap-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Management System</a>
                <img src="Images/fav.gif" height="50px" alt="DSS logo">
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="Admin/admin_index.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">User Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign_up.php">User Registration</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<br>

<!-- Rules and Regulations-Taken from bootstrap-->
<div class="container-fluid row">
    <div class="col-md-8" id="side_bar">
        <h4>Library Schedule</h4>
        <ul>
            <li>Opening time: 8 AM </li>
            <li>Closed during lunch hour: 12 PM - 1 PM</li>
            <li>Closed during short snack break: 4 PM - 4:30 PM</li>
            <li>Closed for the day: 6 PM</li>
        </ul>
        <h4>Library Rules</h4>
        <ul>
            <li>You can only issue books upon information.</li>
            <li>Books must be returned upon finishing issued date.</li>
            <li>Highlighting, tearing or adding any marks in the books will not be accepted.</li>
            <li>Silence and peacefulness has to be maintained in the library.</li>
            <li>Using mobile and other audio without headphones is not allowed inside the library.</li>
            <li>Highlighting, tearing or adding any marks in the books will not be accepted.</li>
            <li>Students are responsible for any kind of damage or loss of the library property.</li>
        </ul>
        <br>
        <h2>Library is a place of knowledge. Please keep it neat and tidy.</h2>
    </div>
    <!--Login form for the user-->
    <div class="col-md-4 id="main_content">
    <center><h3>Login Form (User)</h3></center>
    <form action="" method="post">

                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" name="login" class="btn btn-dark">Login</button>

    </form>
    <?php
        session_start();
        if(isset($_POST['login'])){
            //Database connection
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,"lms_project folder");

            //Query for login form check
            $sql = "SELECT * from user where email = '$_POST[email]'";
            $run_sql = mysqli_query($connection,$sql);
            while($row = mysqli_fetch_assoc($run_sql)){
                if($row['email'] == $_POST['email']){
                    if($row['password'] == $_POST['password']){
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['id'] = $row['id'];
                        header("Location:user_panel.php");
                    }
                    else {
                        ?>
    <br> <br>  <center><span class="alert-danger">Incorrect Password!!</span></center>
    <?php
                    }
                }
            }
        }
    ?>
</div>
</div>
</body>

<!-- Footer -->
<footer>
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
        <a href="https://github.com/pranjal23030">Pranjal Khatiwada</a>
    </div>
</footer>
<!-- Footer -->
</html>
