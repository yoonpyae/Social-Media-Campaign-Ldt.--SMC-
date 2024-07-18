<?php

include('dbconnect.php');
$MDeleteID = $_GET['mID'];
$deleteM = "DELETE FROM Mediatb WHERE MediaID= '$MDeleteID'";
$deleteQuery = mysqli_query($connect, $deleteM);

if($deleteQuery) {
    echo "<script>window.alert('Sucessfully deleted Media data!')</script>";
    echo "<script>window.location='AdminList.php'</script>";
} else {
    echo "<script>window.alert('Unsucessfully deleted Media data! Please Try Again!')</script>";
    echo "<script>window.location='AdminList.php'</script>";

}
