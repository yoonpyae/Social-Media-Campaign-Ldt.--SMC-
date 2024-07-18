<?php

include('dbconnect.php');
$adminDeleteID = $_GET['AID'];
$deleteAdmin = "DELETE FROM admintb WHERE AdminID= '$adminDeleteID'";
$deleteQuery = mysqli_query($connect, $deleteAdmin);

if($deleteQuery) {
    echo "<script>window.alert('Sucessfully deleted Admin data!')</script>";
    echo "<script>window.location='AdminList.php'</script>";
} else {
    echo "<script>window.alert('Unsucessfully deleted Admin data!')</script>";
    echo "<script>window.location='AdminList.php'</script>";

}
