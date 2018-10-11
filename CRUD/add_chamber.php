<?php

include_once'connection.php';

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO add_chamber (chamber_title,chamber_address ,fees,approx_time_patient,patient_per_day_limit,visit_days,visit_time_from,visit_time_to)
    VALUES ('".$_POST["chamber_name"]."','".$_POST["chamber_address"]."','".$_POST["fees"]."','".$_POST["approx_time"]."','".$_POST["patient_limit"]."','".$_POST["visit_days"]."','".$_POST["TimeFrom"]."','".$_POST["TimeTo"]."')";

    $result = mysqli_query($conn,$sql);

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

    <title>Add Chamber</title>


</head>
<body style="background-color:silver">
  <div style="margin-top:50px"></div>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8" style="background-color:white"><br><br>

    <div>
          <a class="btn btn-info" href="chamber_list.php">Chamber List</a>
    </div>


    <div>
        <h1 class="display-5 text-center my-3">Add Chamber</h1>
            <div class="container">
                <form method="POST">

                    <div class="form-group">
                      <label for="chamber_title"><b>Chamber Title:</b></label>
                      <input class="form-control" type="text" placeholder="Enter Chamber Name" name="chamber_name" required>
                    </div>

                    <div class="form-group">
                      <label for="chamber_address"><b>Chamber Address:</b></label>
                      <input class="form-control" type="text" placeholder="Enter Chamber Address" name="chamber_address" required>
                    </div><br>

                    <label for="assistant"><b>Assistant:</b></label>
                    <div class="dropdown">
                        <button class="btn btn-lg dropdown-toggle" type="button" style="padding-left:30px" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">assistant 1</button>
                          <button class="dropdown-item" type="button">assistant 2</button>
                          <button class="dropdown-item" type="button">assistant 3</button>
                        </div>
                    </div>
                    </div><br>

              </form><br>

                <form class="form-inline" method="POST">
                  <div>
                    <label class="mr-3" for="fees"><b>Fees(BDT):</b></label><br>
                    <input class="form-control mr-4 ml-3" type="text" name="fees">
                  </div>

                  <div>
                    <label for=approx_time_for_patient><b>Approx time for each patient:</b></label><br>
                    <input class="form-control mr-3 ml-3" type="text" name="approx_time">
                  </div>

                  <div>
                    <label for=patient_limit><b>Patient per day limit:</b></label><br>
                    <input class="form-control mr-3 ml-3" type="text" name="patient_limit">
                  </div>
                </form>
                <br>

                  <label for="visit_days"><b>Select Visit Days:</b></label><br>

                    <div class="form-check-inline" style="padding-left:5px">
                     <label class="form-check-label">
                       <input type="checkbox" class="form-check-input" name="day[]" value="sunday">Sun
                     </label>
                    </div>

                    <div class="form-check-inline" style="padding-left:10px">
                     <label class="form-check-label">
                       <input type="checkbox" class="form-check-input" name="day[]" value="monday">Mon
                     </label>
                    </div>

                    <div class="form-check-inline">
                     <label class="form-check-label" style="padding-left:10px">
                       <input type="checkbox" class="form-check-input" name="day[]" value="tuesday">Tue
                     </label>
                    </div>

                    <div class="form-check-inline">
                     <label class="form-check-label" style="padding-left:10px">
                       <input type="checkbox" class="form-check-input" name="day[]" value="wednesday">Wed
                     </label>
                    </div>

                    <div class="form-check-inline">
                     <label class="form-check-label" style="padding-left:10px">
                       <input type="checkbox" class="form-check-input" name="day[]" value="thursday">Thu
                     </label>
                    </div>

                    <div class="form-check-inline" style="padding-left:10px">
                     <label class="form-check-label">
                       <input type="checkbox" class="form-check-input"name="day[]" value="friday">Fri
                     </label>
                    </div>

                    <div class="form-check-inline" style="padding-left:10px">
                     <label class="form-check-label">
                       <input type="checkbox" class="form-check-input" name="day[]" value="saturday">Sat
                     </label>
                   </div><br><br>

                    <div>
                      <div>
                        <label for=visit_time><b>Select Visit Time:</b></label><br>
                      </div>
                      <form class="form-inline">
                      <div class="form-check-inline">
                          <input style="width:200px" type="time" name="TimeFrom" value="time" id="datetimepicker" onchange="getStartTime();">
                      </div>
                      <div class="form-check-inline">
                         <label for="to">To</label>
                      </div>
                      <div class="form-check-inline">
                          <input style="width:200px" type="time" name="TimeTo" value="time" id="datetimepicker" onchange="getStartTime();">
                      </div>
                    </form><br>
                    </div>
                    <form method="POST">
                    <b style="padding-left:390px"><button type="submit" class="btn btn-default" name="save">Submit</button></b><br><br><br>
                  </form>
              </div>
          </div>
    </div><br><br>
    <div class="col-sm-2"></div>
  </div>
</div>
</body>
</html>
