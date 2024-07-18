<?php

include('dbconnect.php');

$campaignID = $_GET['cID'];

$query = "SELECT * FROM Campaigntb 
        WHERE CampaignID='$campaignID'";
$ret = mysqli_query($connect, $query);
$arr = mysqli_fetch_array($ret);

if (isset($_POST['btnUpdate'])) { //using POST method
    // data transfer to each variable
    $CampaignID = $_POST['txtCampaignID'];
    $CampaignName = $_POST['txtCampaignName'];
    $Aim = $_POST['txtAim'];
    $Vision = $_POST['txtVision'];
    $Fees = $_POST['txtFees'];
    $Location = $_POST['txtLocation'];
    $StartDate = $_POST['txtStartDate'];
    $EndDate = $_POST['txtEndDate'];
    $Desciption = $_POST['txtDesciption'];

    $CampaignStatus = $_POST['cboStatus'];


    $Update = "UPDATE Campaigntb 
               SET 
               CampaignName='$CampaignName',
               Aim='$Aim',
               Vision='$Vision',
               Fees='$Fees',
               Location='$Location',
               StartDate='$StartDate',
               EndDate='$EndDate',
               Desciption='$Desciption',
 
               CampaignStatus='$CampaignStatus'
               WHERE 
               CampaignID='$CampaignID'
             ";
    $UpdateRet = mysqli_query($connect, $Update);

    if($UpdateRet) { //true
        echo "<script>window.alert('Campaign Information Updated!')</script>";
        echo "<script>window.location='AdminList.php'</script>";
    } else {
        echo "<p>Something went wrong in Update " . mysqli_error($connect) . "</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" type="text/css"
        href="Style/AdminStyle.css?<?php echo time(); ?>">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>SMC - Campaign Edit Form</title>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="slidebar">
        <div class="slidebar-brand">
            <a href="Dashboard.php">SMC <span><small>Ltd.</small></span></a>
        </div>

        <div class="sliderbar-menu">
            <ul>
                <li>
                    <a href="Dashboard.php" class="active"><img src="admindata/ic-db.png" alt="Dashboard" /></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="Media.php"><img src="admindata/ic-md.png" alt="media" />
                        <span>Add Media</span>
                    </a>
                </li>
                <li>
                    <a href="CampaignType.php"><img src="admindata/ic-ct.png" alt="campaignType" />
                        <span>Add Campaign Types</span>
                    </a>
                </li>
                <li>
                    <a href="Campaign.php"><img src="admindata/ic-cp.png" class="cp" alt="campaigns" />
                        <span>Add Campaigns</span>
                    </a>
                </li>

                <li>
                    <a href="CustomerList.php"> <img src="AdminData/ic-cus.png" alt="customerList" />
                        <span>Customer List</span>
                    </a>
                </li>
                <li>
                    <a href="AdminList.php">
                        <img src="AdminData/ic-ad.png" alt="adminList" />
                        <span>Admin List</span>
                    </a>
                </li>
                <li> <br><br><br><br><br>
                    <a href="AdminLogOut.php" class="logout"> <img src="admindata/icons8-logout-96.png" alt=""> <span>
                            LogOut</span></a>
                </li>
            </ul>
        </div>
    </div>

    <section class="Listing">
        <div class="Media">
            <form action="CampaignEdit.php" method="POST">




                <h1 class="section-title underline">Edit Campaign Info :</h1>

                <label for="">Campaign Name :</label>
                <input type="text" name="txtCampaignName"
                    value="<?php echo $arr['CampaignName'] ?>"
                    required><br><br>

                <label for="">Aim :</label>
                <input type="text" name="txtAim"
                    value="<?php echo $arr['Aim'] ?>"
                    required><br><br>

                <label for="">Vision :</label>
                <input type="text" name="txtVision"
                    value="<?php echo $arr['Vision'] ?>"><br><br>


                <label for="">Fees ($) :</label>
                <input type="text" name="txtFees"
                    value="<?php echo $arr['Fees'] ?>"
                    required><br><br>

                <label for="">Location :</label>
                <input type="text" name="txtLocation"
                    value="<?php echo $arr['Location'] ?>"
                    required><br><br>

                <label for="">Start Date :</label>
                <input type="text" name="txtStartDate"
                    value="<?php echo $arr['StartDate'] ?>"
                    required><br><br>

                <label for="">End Date :</label>
                <input type="text" name="txtEndDate"
                    value="<?php echo $arr['EndDate'] ?>"><br><br>


                <label for="">Desciption :</label>
                <input type="text" name="txtDesciption"
                    value="<?php echo $arr['Desciption'] ?>"
                    required><br><br>

                <label for="">Campaign Status :</label>
                <select name="cboStatus" class="cbo">
                    <option>
                        <?php echo $arr['CampaignStatus'] ?>
                    </option>
                    <option value="Pending">Pending</option>
                    <option value="Active">Active</option>
                </select><br><br>


                <input type="hidden" name="txtMediaID"
                    value="<?php echo $arr['MediaID'] ?>" />

                <input type="submit" name="btnUpdate" value="Update" id="" class="btn">


            </form>
        </div>
    </section>
</body>

</html>