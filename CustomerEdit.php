<?php
include('dbconnect.php');

$CustomerID = $_GET['CusID'];

$query = "SELECT * FROM customertb 
        WHERE CustomerID='$CustomerID'";
$ret = mysqli_query($connect, $query);
$arr = mysqli_fetch_array($ret);

if (isset($_POST['btnUpdate'])) { //using POST method
    // data transfer to each variable
    $CustomerID = $_POST['txtCustomerID'];
    $FirstName = $_POST['txtFirstName'];
    $Surname = $_POST['txtSurname'];
    $Username = $_POST['txtUsername'];
    $Address = $_POST['txtAddress'];
    $PhoneNo = $_POST['txtPhoneNo'];
    $Email = $_POST['txtEmail'];
    $Password = $_POST['txtPassword'];
    $RegistrationMonth = $_POST['txtRegistrationMonth'];

    $Update = "UPDATE Customertb
             SET 
             FirstName='$FirstName',
             Surname='$Surname',
             Username='$Username',
             Address='$Address',
             PhoneNo='$PhoneNo',
             Email='$Email',
             Password='$Password',
             RegistrationMonth='$RegistrationMonth'
             WHERE 
             CustomerID='$CustomerID'
             ";
    $UpdateRet = mysqli_query($connect, $Update);

    if($UpdateRet) { //true
        echo "<script>window.alert('Customer Information Updated!')</script>";
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
    <title>SMC - Customer Edit Form</title>
</head>

<body> <input type="checkbox" id="nav-toggle">
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
            <form action="CustomerEdit.php" method="POST">


                <h1 class="section-title underline">Edit Customer Info :</h1>

                <label for="">First Name :</label>
                <input type="text" name="txtFirstName"
                    value="<?php echo $arr['FirstName'] ?>"
                    required><br><br>

                <label for="">Surname :</label>
                <input type="text" name="txtSurname"
                    value="<?php echo $arr['Surname'] ?>"
                    required><br><br>

                <label for="">Username :</label>
                <input type="text" name="txtUsername"
                    value="<?php echo $arr['Username'] ?>"
                    required><br><br>

                <label for="">Address :</label>
                <input type="text" name="txtAddress"
                    value="<?php echo $arr['Address'] ?>"
                    required><br><br>

                <label for="">Phone Number :</label>
                <input type="text" name="txtPhoneNo"
                    value="<?php echo $arr['PhoneNo'] ?>"
                    required><br><br>

                <label for="">Email :</label>
                <input type="text" name="txtEmail"
                    value="<?php echo $arr['Email'] ?>"
                    required><br><br>

                <label for="">Password :</label>
                <input type="text" name="txtPassword"
                    value="<?php echo $arr['Password'] ?>"
                    required><br><br>

                <label for="">Registration Month :</label>
                <input type="text" name="txtRegistrationMonth"
                    value="<?php echo $arr['RegistrationMonth'] ?>"
                    required><br><br>

                <input type="hidden" name="txtCustomerID"
                    value="<?php echo $arr['CustomerID'] ?>" />

                <input type="submit" name="btnUpdate" value="Update" id="" class="btn">

            </form>
        </div>
    </section>
</body>

</html>