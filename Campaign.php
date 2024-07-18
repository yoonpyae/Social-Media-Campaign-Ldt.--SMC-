<?php

session_start();
include('dbconnect.php');

if (!isset($_SESSION['AadminID'])) {
    echo "<script>window.alert('Please Login Again To Access Data')</script>";
    echo "<script>window.location='AdminLogin.php'</script>";
} else {

    $codeNo = $_SESSION['AadminID'];
    $name = $_SESSION['Ausername'];

    if(isset($_POST['btnAdd'])) {
        $cname = $_POST['txtName'];
        $Aim = $_POST['txtAim'];
        $Vision = $_POST['txtVision'];
        $Fees = $_POST['txtFees'];
        $Location = $_POST['txtLocation'];
        $StartDate = $_POST['txtStartDate'];
        $EndDate = $_POST['txtEndDate'];
        $Desciption = $_POST['txtDesciption'];
        $Status = $_POST['cboStatus'];
        $Media = $_POST['cboMedia'];
        $CampaignType = $_POST['cboCampaignType'];


        //img1 upload
        $img1 = $_FILES['fileCampaignImg1']['name'];
        $folder = "AdminData/";
        $dbstorefilename1 = $folder.uniqid()."_".$img1;
        $copy = copy($_FILES['fileCampaignImg1']['tmp_name'], $dbstorefilename1);
        if (!$copy) {
            echo "<p>Cannot Upload Media Image 1</p>";
            exit();
        }

        //img2 upload
        $img2 = $_FILES['fileCampaignImg2']['name'];
        $folder = "AdminData/";
        $dbstorefilename2 = $folder.uniqid()."_".$img2;
        $copy = copy($_FILES['fileCampaignImg2']['tmp_name'], $dbstorefilename2);
        if (!$copy) {
            echo "<p>Cannot Upload Media Image 2</p>";
            exit();
        }

        //img3 upload
        $img3 = $_FILES['fileCampaignImg3']['name'];
        $folder = "AdminData/";
        $dbstorefilename3 = $folder.uniqid()."_".$img3;
        $copy = copy($_FILES['fileCampaignImg3']['tmp_name'], $dbstorefilename3);
        if (!$copy) {
            echo "<p>Cannot Upload Media Image 3</p>";
            exit();
        }

        $selectType = "SELECT * from Campaigntb WHERE CampaignName='$cname'";
        $runQuery = mysqli_query($connect, $selectType);

        $row = mysqli_num_rows($runQuery);

        if ($row > 0) {


            echo "<script>window.alert('Duplicate Data! Please Add Data Again')</script>";
            echo "<script>window.location='Campaign.php'</script>";

        } else {
            $insertCampaign = "INSERT INTO Campaigntb(CampaignName,Aim,Vision,Fees,Location,StartDate, EndDate,Desciption,CampaignImage1,CampaignImage2,CampaignImage3,CampaignStatus,MediaID,CampaignTypeID) 
                        VALUES ('$cname','$Aim','$Vision','$Fees', '$Location', '$StartDate','$EndDate','$Desciption', '$dbstorefilename1', '$dbstorefilename2','$dbstorefilename3','$Status','$Media','$CampaignType')";
            $insertQuery = mysqli_query($connect, $insertCampaign);

            if($insertQuery) {

                echo "<script>window.alert('Sucessfully Data inserted!')</script>";
                echo "<script>window.location='Campaign.php'</script>";

            }
        }
    }
}
$query = "SELECT * FROM admintb 
        WHERE AdminID='$codeNo'";
$ret = mysqli_query($connect, $query);
$arr = mysqli_fetch_array($ret);
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
    <title>SMC - Add Campaign Form</title>
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

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle"><span class="las la-bars"></span></label>
                Campaign
            </h2>
            <div class="user-wrapper">
                <img src="<?php echo $arr['ProfileImage1'] ?>"
                    alt="">
                <div>
                    <h4> <?php echo $arr['AdminName'] ?>
                    </h4>
                    <small><?php echo $arr['Position'] ?></small>
                </div>
            </div>
        </header>
    </div>

    <section class="Listing">
        <div class="Media">
            <form action="Campaign.php" method="POST" enctype="multipart/form-data">

                <h1 class="section-title underline">Add Campaign Data:</h1>
                <label for="">Campaign Name:</label>
                <input type="text" name="txtName" required><br><br>

                <label for="">Aim:</label>
                <input type="text" name="txtAim" required><br><br>

                <label for="">Vision:</label>
                <input type="text" name="txtVision" required><br><br>

                <label for="">Fees:</label>
                <input type="text" name="txtFees" required><br><br>

                <label for="">Location:</label>
                <input type="text" name="txtLocation" required><br><br>

                <label for="">StartDate:</label>
                <input type="text" name="txtStartDate"
                    value="<?php echo date('Y-m-d')?>"
                    required><br><br>

                <label for="">EndDate:</label>
                <input type="text" name="txtEndDate"
                    value="<?php echo date('Y-m-d')?>"
                    required><br><br>

                <label for="">Desciption:</label>
                <input type="text" name="txtDesciption" required><br><br>

                <label for="">CampaignImage1:</label>
                <input type="file" name="fileCampaignImg1"><br><br>

                <label for="">CampaignImage2:</label>
                <input type="file" name="fileCampaignImg2"><br><br>

                <label for="">CampaignImage3:</label>
                <input type="file" name="fileCampaignImg3"><br><br>

                <label for="">CampaignStatus</label>
                <select name="cboStatus" class="cbo">
                    <option value="Pending">Pending</option>
                    <option value="Active">Active</option>
                </select><br><br>

                <label for="">Choose Media App</label>
                <select name="cboMedia" id="">
                    <?php
$selectMedia = "SELECT * FROM Mediatb";
$resultMediaQuery = mysqli_query($connect, $selectMedia);
$countMedia = mysqli_num_rows($resultMediaQuery);

for ($i = 0; $i < $countMedia; $i++) {
    $array = mysqli_fetch_array($resultMediaQuery);
    $MID = $array['MediaID'];
    $MName = $array['MediaName'];

    echo "<option value='$MID'>$MName</option>";
}
?>
                </select><br><br>

                <label for="">Choose Campaign Type</label>
                <select name="cboCampaignType" id="">
                    <?php
$selectCampaignType = "SELECT * FROM CampaignTypetb";
$resultCampaignTypeQuery = mysqli_query($connect, $selectCampaignType);
$countCampaignType = mysqli_num_rows($resultCampaignTypeQuery);

for ($i = 0; $i < $countCampaignType; $i++) {
    $array = mysqli_fetch_array($resultCampaignTypeQuery);
    $CTID = $array['CampaignTypeID'];
    $CTName = $array['CampaignTypeName'];

    echo "<option value='$CTID'>$CTName</option>";
}
?>
                </select><br><br>

                <button type="submit" name="btnAdd" class="btn">Add</button>

            </form>
        </div>
    </section>
</body>

</html>