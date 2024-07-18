<?php
include('dbconnect.php');

$mediaID = $_GET['mID'];

$query = "SELECT * FROM Mediatb 
        WHERE MediaID='$mediaID'";
$ret = mysqli_query($connect, $query);
$arr = mysqli_fetch_array($ret);

if (isset($_POST['btnUpdate'])) { //using POST method
    // data transfer to each variable
    $MediaID = $_POST['txtMediaID'];
    $MediaeName = $_POST['txtMediaName'];
    $Description = $_POST['txtDescription'];
    $mTechniques = $_POST['txtTechniques'];
    $mLink = $_POST['txtMediaLink'];
    $Rating = $_POST['cboRating'];

    $Update = "UPDATE Mediatb 
               SET 
               MediaName='$MediaeName',
               Description='$Description',
               MediaLink='$mLink',
               Techniques='$mTechniques',
               Rating='$Rating'
               WHERE 
               MediaID='$MediaID'
             ";
    $UpdateRet = mysqli_query($connect, $Update);

    if($UpdateRet) { //true
        echo "<script>window.alert('Media Information Updated!')</script>";
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
    <title>SMC - Media Edit Form</title>
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
            <form action="MediaEdit.php" method="POST">

                <h1 class="section-title underline">Edit Media Info :</h1>

                <label for="">Media Name :</label>
                <input type="text" name="txtMediaName"
                    value="<?php echo $arr['MediaName'] ?>"
                    required><br><br>

                <label for="">Description :</label>
                <input type="text" name="txtDescription"
                    value="<?php echo $arr['Description'] ?>"
                    required><br><br>


                <label for="">Media Link :</label>
                <input type="text" name="txtMediaLink"
                    value="<?php echo $arr['MediaLink'] ?>"
                    required><br><br>

                <label for="">Media Rating :</label>


                <select name="cboRating">
                    <option>
                        <?php echo $arr['Rating'] ?>
                    </option>
                    <option value="★">⭐</option>
                    <option value="★ ★">⭐⭐</option>
                    <option value="★ ★ ★">⭐⭐⭐</option>
                    <option value="★ ★ ★ ★">⭐⭐⭐⭐</option>
                    <option value="★ ★ ★ ★ ★">⭐⭐⭐⭐⭐</option>
                </select> <br><br>

                <label for="">Media Techniques :</label>
                <input type="text" name="txtTechniques"
                    value="<?php echo $arr['Techniques'] ?>"
                    required><br><br>

                <input type="hidden" name="txtMediaID"
                    value="<?php echo $arr['MediaID'] ?>" />

                <input type="submit" name="btnUpdate" value="Update" id="" class="btn">


            </form>
        </div>
    </section>
</body>

</html>