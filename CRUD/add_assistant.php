<?php

include_once'connection.php';

  if(isset($_POST['save']))
  {

      $sql = "INSERT INTO add_assistant (assistant_name,mobile, assigned_password,address,upload_id)
      VALUES ('".$_POST['assistant_name']."','".$_POST["mobile"]."','".$_POST["password"]."','".$_POST["address"]."','".$_POST["upload"]."')";
      
     if($result = mysqli_query($conn,$sql)){

      echo"Data insert successfully";
     }
      
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

  <title>Add Assistant</title>
</head>
<body style="background-color:silver">
  <div style="margin-top:50px"></div>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8" style="background-color:white";><br><br>
      <div>
            <a class="btn btn-info" href="assistant_list.php">Assistant List</a>
      </div>

      <div>
          <h1 class="display-5 text-center my-4">Add Assistant</h1>
              <div class="container">
                  <form method="POST">
                      <div class="form-group">
                        <label for="assistant_name"><b>Assistant Full Name:</b></label>
                        <input class="form-control" type="text" placeholder="Enter Assistant Name" name="assistant_name" required>
                      </div>

                      <div class="form-group">
                        <label for="assign_chamber"><b>Assign Chamber:</b></label>
                        <div class="dropdown">
                          <button class="btn btn-lg dropdown-toggle" type="button"style="padding-left:30px" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">chamber 1</button>
                          <button class="dropdown-item" type="button">chamber 2</button>
                          <button class="dropdown-item" type="button">chamber 3</button>
                          </div>
                        </div>

                      </div>

                      <div class="form-group">
                        <label for="mobile"><b>Mobile:</b></label>
                        <input class="form-control" type="text" placeholder="Enter Mobile Number" name="mobile">
                      </div>

                      <div class="form-group">
                        <label for="assigned_password"><b>Assigned Password:</b></label>
                        <input class="form-control" type="text" placeholder="Enter Password" name="password" required>
                      </div>

                      <div class="form-group">
                        <label for="address"><b>Address:</b></label>
                        <input class="form-control" type="text" name="address">
                      </div>

                      <div class="form-group">
                      <label for="file"><b>Upload Id</b>(Passport/NID/Driving License):</label>
                      <div class="custom-file">
                          <input type="file" name="upload" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div><br>
                      <b style="padding-left:390px"><button type="submit" class="btn btn-default" name="save">Submit</button></b><br>
                  </form><br>

              </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
</body>
</html>
