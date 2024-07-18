<?php

include('dbconnect.php');
$ctDeleteID = $_GET['ctID'];
$deleteCT = "DELETE FROM CampaignTypetb WHERE CampaignTypeID= '$ctDeleteID'";
$deleteQuery = mysqli_query($connect, $deleteCT);

if($deleteQuery) {
    echo "<script>window.alert('Sucessfully deleted Campaign Type data!')</script>";
    echo "<script>window.location='AdminList.php'</script>";
} else {
    echo "<script>window.alert('Unsucessfully deleted Campaign Type data!')</script>";
    echo "<script>window.location='AdminList.php'</script>";

}
