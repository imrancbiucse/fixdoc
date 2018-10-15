<?php
if( isset($_POST['mobile']) and isset($_POST['password']) ) {
    include('connection.php'); 
    $mobile=$_POST['mobile'];
    $pass=$_POST['password'];
    
    $mobile == 'mobile' && $pass=='password';
 
    $result=mysqli_query( $conn, "SELECT * FROM login WHERE mobile='$mobile' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    if(($mobile=='mobile') || ($pass=='password'))
    {
      echo"Login Successful";
    }
    else if (($mobile!=='mobile') || ($pass!=='password'))
    {
        echo "Wrong username or password!";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script type="text/javascript" src="JS/bootstrap.min.js">
    </script>
    <title>Login Form</title>
</head>
<body style="background-color:silver">
  <div style="margin-top:100px;"></div>
  <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4" style="background-color:white"><br><br><br><br>

      <div class="container" style="padding-left:50px">
          <form method="POST" action="navbar.php">

              <div class="form-input">
                <label for="mobile"><b>Mobile</b></label>
                <b style="padding-left:30px"><input type="mobile_number" placeholder="Enter mobile name" name="mobile" required></b>
              </div><br>

              <div class="form-input">
                <label for="password"><b>Password</b></label>
                <b style="padding-left:10px"><input type="password" placeholder="Enter your password" name="password" required></b>
              </div><br>
              <b style="padding-left:140px"><input class="btn login" type="submit" name="submit" value="Login"><br><br><br></b>
          </form>
       </div>
   </div>
   <div class="col-sm-4"></div>
 </div>
</body>
</html>
