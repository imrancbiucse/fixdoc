<?php

include 'connection.php';

$id = $_GET['id'];

$name = $_POST['chamber_name'];
$address = $_POST['chamber_address'];
$fees = $_POST['fees'];
$aprox_time = $_POST['approx_time'];
$patient_limit = $_POST['patient_limit'];
$day = $_POST['day[]'];
$time_from = $_POST['TimeFrom'];
$time_to = $_POST['TimeTo'];

$sql = "UPDATE add_chamber SET chamber_title = '$name', chamber_address = '$address', fees = '$fees',  	approx_time_patient = '$aprox_time', patient_per_day_limit = '$patient_limit', visit_days = '$day',visit_time_from = '$time_from',visit_time_to = '$time_to' WHERE id = $id ";
if(mysqli_query($conn,$sql))
{
    header("location:chamber_list.php");
} 
else
{
    echo "No chamber updated";
}
?>
