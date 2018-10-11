<?php

include 'connection.php';

$id = $_GET['id'];

$name = $_POST['assistant_name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$address = $_POST['address'];
$upload = $_POST['upload'];

$sql = "UPDATE add_assistant SET assistant_name = '$name', mobile = '$mobile', assigned_password = '$password',  	address = '$address', upload_id = '$upload' WHERE id = $id ";
if(mysqli_query($conn,$sql))
{
    header("location:assistant_list.php");
} 
else
{
    echo "No assistant updated";
}
?>
