<?php
include('dbconnect.php');

if (isset($_POST['btnRegister'])) { //using POST method
    // data transfer to each variable
    $adminName = $_POST['txtAdminName'];
    $username = $_POST['txtUsername'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $address = $_POST['txtAddress'];
    $phoneNumber = $_POST['txtPhoneNumber'];
    $position = $_POST['cboRole'];

    //img1 upload
    $img1 = $_FILES['fileUserImg']['name'];
    $folder = "AdminData/";
    $dbstorefilename1 = $folder.uniqid()."_".$img1;
    $copy = copy($_FILES['fileUserImg']['tmp_name'], $dbstorefilename1);
    if (!$copy) {
        echo "<p>Cannot Upload Profile</p>";
        exit();
    }

    $number = preg_match('@[0-9]@', $password);
    $upperChara = preg_match('@[A-Z]@', $password);
    $lowerChara = preg_match('@[a-z]@', $password);
    $specialChara = preg_match('@[^\w]@', $password);

    $checkEmailPassword = "SELECT * FROM admintb WHERE Email='$email' AND Password='$password'";

    $checkQuery = mysqli_query($connect, $checkEmailPassword);
    $checkRow = mysqli_num_rows($checkQuery);

    if($checkRow > 0) {
        echo "<script>window.alert('Already exist Email and Password')</script>";
        echo "<script>window.location='AdminRegister.php'</script>";
    } elseif (strlen($password) < 7 || !$number || !$upperChara || !$lowerChara || !$specialChara) {
        echo "<script>window.alert('Password length must be 7 characters long and include at least 1 uppercase, 1 lowercase, 1 number and 1 special character')</script>";
        echo "<script>window.location='AdminRegister.php'</script>";

    } else {
        $insertAdminData = "INSERT INTO admintb(AdminName,	Username,	Address,	PhoneNo,	ProfileImage1,	Email,	Password,	Position)
        VALUES('$adminName','$username','$address','$phoneNumber', '$dbstorefilename1', '$email','$password','$position')";

        $adminQueryRunning = mysqli_query($connect, $insertAdminData);

        if($adminQueryRunning) {
            echo "<script>window.alert('Registration successful! You can now log in.')</script>";
            echo "<script>window.location='AdminLogin.php'</script>";
        } else {
            echo "<script>window.alert('Admin can't register')</script>";
            echo "<script>window.location='AdminRegister.php'</script>";
        }
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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <title>SMC - Admin Register Form</title>
</head>

<body>
    <section class="register">
        <div class="login-wrapper">
            <form action="AdminRegister.php" method="POST" enctype="multipart/form-data">
                <h1>Admin Registeration</h1>

                <div class="input-box">
                    <div class="input-field">Admin Name *
                        <input type="text" name="txtAdminName" placeholder="Enter Full Name" required>
                        <i class="las la-user"></i>
                    </div>
                    <div class="input-field">Username *
                        <input type="text" name="txtUsername" placeholder="Enter Username" required>
                        <i class="las la-user"></i>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">Email *
                        <input type="text" name="txtEmail" placeholder="Enter Email" required>
                        <i class="las la-envelope"></i>
                    </div>
                    <div class="input-field">Password *
                        <input type="password" name="txtPassword" placeholder="Enter Password" required>
                        <i class="las la-key"></i>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">Phone Number *
                        <input type="text" name="txtPhoneNumber" placeholder="Enter Phone Number" required>
                        <i class="las la-phone"></i>
                    </div>
                    <div class="input-field">Address *
                        <input type="text" name="txtAddress" placeholder="Enter Address" required>
                        <i class="las la-map-marker"></i>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">Profile Image
                        <input type="file" name="fileUserImg">
                        <i class="las la-user-circle"></i>
                    </div>
                    <div class="input-field"> Position *
                        <select name="cboRole" class="cbo">
                            <option value="Administrator">Administrator</option>
                            <option value="Content Creator">Content Creator</option>
                            <option value="Project Manager">Project Manager</option>
                            <option value="Membership Coordinator">Membership Coordinator</option>
                            <option value="Campaigns Manager">Campaigns Manager</option>
                        </select>
                        <i class="las la-user-tag"></i>
                    </div>
                </div>
                <label>Are u old staff? <a href="AdminLogin.php" class="link-login"> Please Login here</a></label>
                <button type="submit" name="btnRegister" class="btn">Register</button>
            </form>
        </div>
    </section>
</body>

</html>