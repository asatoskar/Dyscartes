<?php
include('config.php');
$message ="";
    if (isset($_POST['submit'])) {
		$name=$_POST['sname'];
        $uname=$_POST['uname'];
        $password=md5($_POST['spass']);
        $age=$_POST['age'];
        
        
        $sql = "INSERT INTO students(sname, username, password, age) VALUES ('$name','$uname','$password','$age')";
        $conn->query($sql);
        

        $message = "<h3>Registration Successful... <a class='btn' href='patientLogin.php'>LOGIN</a> to continue.</h3>";
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

    <title>Student Register</title>

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

      <form class="form-signin" method="post" action="studentRegister.php">
        <h2 class="form-signin-heading">Students Register</h2>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="text" id="inputEmail" name="sname" class="form-control" placeholder="Full Name" required autofocus> 
        <label for="inputEmail" class="sr-only">User Name</label>
        <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="User Name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="spass" class="form-control" placeholder="Password" required>
        <label for="inputEmail" class="sr-only">Age</label>
        <input type="text" id="inputEmail" name="age" class="form-control" placeholder="Age" required autofocus>
        <div class="checkbox">
          <label>
            <?php $message; ?>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
