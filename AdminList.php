<?php
session_start();
include('dbconnect.php');

if (!isset($_SESSION['AadminID'])) {
    echo "<scrict>window.alert('Please Login  Again To Access Data')</scrict>";
    echo "<scrict>window.location='AdminLogin.php'</scrict>";
} else {
    $codeNo = $_SESSION['AadminID'];
    $name = $_SESSION['Ausername'];
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
    <title>SMC - Admin List</title>
    <link rel="stylesheet" type="text/css"
        href="Style/AdminStyle.css?<?php echo time(); ?>">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
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
                Admin List
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

        <h1>Admin List</h1>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Admin Name</th>
                    <th>Username </th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Position</th>
                    <th>Profile Image</th>
                    <th>Edit/Delete</th>
                </tr>
            </thead>
            <?php

            //display data
            $adminSelect = "SELECT * FROM admintb";
$selectQuery = mysqli_query($connect, $adminSelect);

$count = mysqli_num_rows($selectQuery);
for ($i = 0; $i < $count; $i++) {
    $array = mysqli_fetch_array($selectQuery);

    $AdminID = $array['AdminID'];
    $AdminName = $array['AdminName'];
    $Username = $array['Username'];
    $Address = $array['Address'];
    $PhoneNo = $array['PhoneNo'];
    $Email = $array['Email'];
    $Password = $array['Password'];
    $Position = $array['Position'];
    $ProfileImage = $array['ProfileImage1'];

    echo "<tr >";
    echo "<td>$AdminID</td>";
    echo "<td>$AdminName</td>";
    echo "<td>$Username</td>";
    echo "<td>$Address</td>";
    echo "<td>$PhoneNo</td>";
    echo "<td>$Email</td>";
    echo "<td>$Password</td>";
    echo "<td>$Position</td>";
    echo "<td><img src='$ProfileImage' width='200' height='200'></td>";
    echo "<td class='center'>
                        <a href='adminEdit.php?AID=$AdminID'><i class='fa-solid fa-pen-to-square'></i> | </a> 
                        <a href='adminDelete.php?AID=$AdminID'><i class='fa-solid fa-trash'></i></a>
                        </td>";
    echo "</tr>";
}

?>
        </table>
        <br><br>


        <h1>Media List</h1>
        <table class="content-table">

            <thead>
                <tr>
                    <th>Media ID</th>
                    <th>Media Name</th>

                    <th>Description</th>
                    <th>Media Image</th>
                    <th>Media Link</th>
                    <th>Rating</th>
                    <th>Media Techniques</th>
                    <th>Edit/Delete</th>
                </tr>
            </thead>
            <?php

//display data
$mediaSelect = "SELECT * FROM Mediatb";
$selectQuery = mysqli_query($connect, $mediaSelect);

$count = mysqli_num_rows($selectQuery);
for ($i = 0; $i < $count; $i++) {
    $array = mysqli_fetch_array($selectQuery);

    $mID = $array['MediaID'];
    $mName = $array['MediaName'];
    $Description = $array['Description'];
    $mImage = $array['MediaImage'];
    $mLink = $array['MediaLink'];
    $Rating = $array['Rating'];
    $mTechniques = $array['Techniques'];

    echo "<tr>";
    echo "<td>$mID</td>";
    echo "<td>$mName</td>";
    echo "<td>$Description</td>";
    echo "<td><img src='$mImage' width='200' height='200'></td>";
    echo "<td>$mLink</td>";
    echo "<td>$Rating</td>";
    echo "<td>$mTechniques</td>";
    echo "<td class='center'>
                        <a href='MediaEdit.php?mID=$mID'><i class='fa-solid fa-pen-to-square'></i> | </a> 
                        <a href='MediaDelete.php?mID=$mID'> <i class='fa-solid fa-trash'></i></a>
                        </td>";
    echo "</tr>";
}

?>
        </table>

        <br><br>


        <h1>Campaign Type List</h1>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Campaign Type ID</th>
                    <th>Campaign Type Name</th>
                    <th>Edit | Delete</th>
                </tr>
            </thead>
            <?php

//display data
$ctSelect = "SELECT * FROM CampaignTypetb";
$selectQuery = mysqli_query($connect, $ctSelect);

$count = mysqli_num_rows($selectQuery);
for ($i = 0; $i < $count; $i++) {
    $array = mysqli_fetch_array($selectQuery);

    $ctID = $array['CampaignTypeID'];
    $ctName = $array['CampaignTypeName'];

    echo "<tr>";
    echo "<td>$ctID</td>";
    echo "<td>$ctName</td>";
    echo "<td class='center'>
                        <a href='CampaignTypeEdit.php?ctID=$ctID'><i class='fa-solid fa-pen-to-square'></i> | </a> 
                        <a href='CampaignTypeDelete.php?ctID=$ctID'> <i class='fa-solid fa-trash'></i></a>
                        </td>";
    echo "</tr>";
}

?>
        </table>

        <br><br>


        <h1>Campaign List</h1>
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Aim</th>
                    <th>Vision</th>
                    <th>Fees ($)</th>
                    <th>Location</th>
                    <th>StartDate</th>
                    <th>EndDate</th>
                    <th>Desciption</th>


                    <th>Status</th>
                    <th>TypeID</th>
                    <th>MediaID</th>
                    <th>Edit | Delete</th>
                </tr>
            </thead>
            <?php

//display data
$campaignSelect = "SELECT * FROM Campaigntb";
$selectQuery = mysqli_query($connect, $campaignSelect);

$count = mysqli_num_rows($selectQuery);
for ($i = 0; $i < $count; $i++) {
    $array = mysqli_fetch_array($selectQuery);

    $cID = $array['CampaignID'];
    $cName = $array['CampaignName'];
    $Aim = $array['Aim'];
    $Vision = $array['Vision'];
    $Fees = $array['Fees'];
    $Location = $array['Location'];
    $StartDate = $array['StartDate'];
    $EndDate = $array['EndDate'];
    $Desciption = $array['Desciption'];

    $CampaignStatus = $array['CampaignStatus'];
    $MediaID = $array['MediaID'];
    $CampaignTypeID = $array['CampaignTypeID'];

    echo "<tr>";
    echo "<td>$cID</td>";
    echo "<td>$cName</td>";
    echo "<td>$Aim</td>";
    echo "<td>$Vision</td>";
    echo "<td>$Fees</td>";
    echo "<td>$Location</td>";
    echo "<td>$StartDate</td>";
    echo "<td>$EndDate</td>";
    echo "<td>$Desciption</td>";


    echo "<td>$CampaignStatus</td>";

    echo "<td class='center'> $CampaignTypeID</td>";
    echo "<td class='center'>$MediaID</td>";
    echo "<td >
            <a href='CampaignEdit.php?cID=$cID'><i class='fa-solid fa-pen-to-square'></i></a> | </a> 
            <a href='CampaignDelete.php?cID=$cID'> <i class='fa-solid fa-trash'></i></a>
          </td>";
    echo "</tr>";
}

?>
        </table>


        <!-- <fieldset>
        <legend>Route List</legend>
        <table border="1px">
            <tr>
                <th>Route Number</th>
                <th>Route Name</th>
                <th>Route Descriction</th>
                <th>Action</th>
            </tr>

           
        </table>
    </fieldset> -->
    </section>
</body>

</html>