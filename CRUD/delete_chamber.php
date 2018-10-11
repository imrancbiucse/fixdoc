<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM add_chamber WHERE id = $id ";
if(mysqli_query($conn,$sql))
{
    header("location:chamber_list.php");
} 
else
{
    echo "No Deleted";
}
?>
