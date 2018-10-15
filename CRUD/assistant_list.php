<?php
$conn = mysqli_connect('localhost','root','','crud');

$sql = "SELECT * FROM add_assistant";
$result = mysqli_query($conn,$sql)

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script type="text/javascript" src="JS/bootstrap.min.js">
    </script>
    <title>Assistant List</title>
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

        <div>
          <a class="btn btn-info" href="add_assistant.php">New Assistant</a>
        </div>
        <div><br>
          <h2>Assistant List</h2>
          <table class="table">
            <thead>
                <th>ID</th>
                <th>Assistant Name</th>
                <th>Assigned Chamber</th>
                <th>Mobile</th>
                <th>Assigned Password</th>
                <th>Address</th>
                <th>Upload NID </th>
                <th>Action</th>
              </thead>
              <tbody>
              <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['assistant_name'] ?></td>
                  <td><?php echo $row['assign_chamber'] ?></td>
                  <td><?php echo $row['mobile'] ?></td>
                  <td><?php echo $row['assigned_password'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><?php echo $row['upload_id'] ?></td>
                  <td><a class="btn btn-warning" href="edit_assistant.php ? id=<?php echo $row['id']; ?>">Edit</a>
                  <a href='delete_assistant.php? id=<?php echo $row['id'];?>'><input class="btn btn-danger" type="button" onclick="return confirm('Are you sure?')" value="Delete"/> </a>
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
