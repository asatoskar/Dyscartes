<?php
include('config.php');
$message ="";
    if (isset($_POST['submit'])) {
		$name=$_POST['tname'];
        $email=$_POST['email'];
        $password=$_POST['tpass'];
        $institute=$_POST['institute'];
        /*$sql = "select * from teachers where email='$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
            if ($result->num_rows == 1) {
				header("location: category.php");
			} */
        $sql = "INSERT INTO teacher(tname, email, tpassword, institute) VALUES ('$name','$email','$password','$institute')";
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

    <title>Teachers Registration</title>

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

      <form class="form-signin" method="POST" action="teachersRegister.php">
        <h2 class="form-signin-heading">Teachers' Registration</h2>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="text" id="inputEmail" name="tname" class="form-control" placeholder="Full Name" required autofocus> 
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="tpass" class="form-control" placeholder="Password" required>
        <label for="inputEmail" class="sr-only">Institute</label>
        <input type="text" id="inputEmail" name="institute" class="form-control" placeholder="Institute" required autofocus>
        <div class="checkbox">
          <label>
            
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
