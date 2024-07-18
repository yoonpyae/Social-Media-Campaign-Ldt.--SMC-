<?php

include('dbconnect.php');
$cDeleteID = $_GET['cID'];
$deleteCT = "DELETE FROM Campaigntb WHERE CampaignID= '$cDeleteID'";
$deleteQuery = mysqli_query($connect, $deleteCT);

if($deleteQuery) {
    echo "<script>window.alert('Sucessfully deleted Campaign data!')</script>";
    echo "<script>window.location='AdminList.php'</script>";
} else {
    echo "<script>window.alert('Unsucessfully deleted Campaign data!')</script>";
    echo "<script>window.location='AdminList.php'</script>";

}
