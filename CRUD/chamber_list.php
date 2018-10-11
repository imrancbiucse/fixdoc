<?php
$conn = mysqli_connect('localhost','root','','crud');

$sql = "SELECT * FROM add_chamber";
$result = mysqli_query($conn,$sql)

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script type="text/javascript" src="JS/bootstrap.min.js">
    </script>
    <title>Chamber List</title>
  </head>
  <body>
    <div style="margin-top:50px"></div>
    <div class="container">
      <div class="row">
      <div>
        <form action="POST">
         <div class="form-group">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#"><b>Doctor</b></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="chamber_list.php"><b>Chamber</b></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="assistant_list.php"><b>Assistant</b></a>
                </li>
              </ul>
              </div>
            </nav>
          </div>
          </form><br>
          </div><br>
        <form>
       <div>
          <a class="btn btn-info" href="add_chamber.php">New Chamber</a>
        </div><br>
          <h2>Chamber List</h2>
          <table class="table">
            <thead>
                <th>Id</th>
                <th>Cham_Title</th>
                <th>Cham_Address</th>
                <th>Fees</th>
                <th>ApprTimePatient</th>
                <th>PatientDayLimit</th>
                <th>Visit Days</th>
                <th>Visit From</th>
                <th>Visit To</th>
                <th>Action</th>
              </thead>
              <tbody>
              <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['chamber_title'] ?></td>
                  <td><?php echo $row['chamber_address'] ?></td>
                  <td><?php echo $row['fees'] ?></td>
                  <td><?php echo $row['approx_time_patient'] ?></td>
                  <td><?php echo $row['patient_per_day_limit'] ?></td>
                  <td><?php echo $row['visit_days'] ?></td>
                  <td><?php echo $row['visit_time_from'] ?></td>
                  <td><?php echo $row['visit_time_to'] ?></td>

                  <td><a class="btn btn-warning" href="edit_chamber.php">Edit</a>
                  <a href='delete_chamber.php? id=<?php echo $row['id'];?>'><input type="button" onclick="return confirm('Are you sure?')" value="Delete"/> </a>
                </td>
                </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>
