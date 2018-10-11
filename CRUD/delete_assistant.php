<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM add_assistant WHERE id = $id ";
if(mysqli_query($conn,$sql))
{
    header("location:assistant_list.php");
} 
else
{
    echo "No Deleted";
}
?>
