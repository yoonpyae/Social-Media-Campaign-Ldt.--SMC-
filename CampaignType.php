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
        $ctname = $_POST['txtCampaignTypeName'];

        $selectType = "SELECT * from CampaignTypetb WHERE CampaignTypeName='$ctname'";
        $runQuery = mysqli_query($connect, $selectType);

        $row = mysqli_num_rows($runQuery);

        if ($row > 0) {
            echo "<script>window.alert('Duplicate Data! Please Add Data Again')</script>";
            echo "<script>window.location='CampaignType.php'</script>";

        } else {
            $insertpt = "INSERT INTO CampaignTypetb(CampaignTypeName) VALUES ('$ctname')";
            $insertQuery = mysqli_query($connect, $insertpt);

            if($insertQuery) {
                echo "<script>window.alert('Sucessfully Data inserted!')</script>";
                echo "<script>window.location='CampaignType.php'</script>";

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
    <title>SMC - Add Campaign Type Form</title>
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
                Campaign Type
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
            <form action="CampaignType.php" method="POST">

                <h1 class="section-title underline">Add Campaign Type Data:</h1>

                <label for="">Campaign Type Name</label>
                <input type="text" name="txtCampaignTypeName" placeholder="Enter Campaign Type" required>

                <input type="submit" name="btnAdd" value="Add" class="btn">

            </form>
        </div>
    </section>
</body>

</html>