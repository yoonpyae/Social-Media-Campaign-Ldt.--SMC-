<?php

include('dbconnect.php');
$cusDeleteID = $_GET['CusID'];
$deleteCus = "DELETE FROM customertb WHERE CustomerID= '$cusDeleteID'";
$deleteQuery = mysqli_query($connect, $deleteCus);

if($deleteQuery) {
    echo "<script>window.alert('Sucessfully deleted Customer data!')</script>";
    echo "<script>window.location='AdminList.php'</script>";
} else {
    echo "<script>window.alert('Unsucessfully deleted Customer data!')</script>";
    echo "<script>window.location='AdminList.php'</script>";

}
