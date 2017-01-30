<?php
include('config.php');
session_start();  // Starting Session


if(isset($_SESSION['login_user'])){
header("location: category.php");
} 

else{
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
    if (empty($_POST['uname']) || empty($_POST['spass'])) {
        $error = "Username or Password is invalid!";
    }
    else{
        // Define $username and $password
        $username=$_POST['uname'];
        $password=md5($_POST['spass']);
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $sql = "select * from students where password='$password' AND username='$username'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
            if ($result->num_rows == 1) {
                $_SESSION['sid']=$row['sid'];
                $_SESSION['login_user']=$username; // Initializing Session
                header("location: category.php"); // Redirecting To Other Page
            } else {
                $error = "Username or Password is invalid!";
            }
    }
}
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Students Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="studentsLogin.php">
        <h2 class="form-signin-heading">Students Login</h2>
        <label for="inputEmail" class="sr-only">User Name</label>
        <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="User Name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="spass" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
           <?php echo $error; ?>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
