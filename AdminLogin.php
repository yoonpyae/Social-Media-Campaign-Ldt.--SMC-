<?php
session_start();
include('dbconnect.php');

if (isset($_POST['btnLogin'])) {
    $adminEmail = $_POST['txtEmail'];
    $adminPassword = $_POST['txtPassword'];

    $selectAccount = "SELECT * FROM admintb WHERE Email='$adminEmail' AND Password='$adminPassword'";
    $selectQuery = mysqli_query($connect, $selectAccount);

    if (!$selectQuery) {
        die('Error: ' . mysqli_error($connect));
    }

    $rowCount = mysqli_num_rows($selectQuery);

    if($rowCount > 0) {

        $array = mysqli_fetch_array($selectQuery);
        $adminID = $array['AdminID'];
        $username = $array['Username'];
        $adminName = $array['AdminName'];


        $_SESSION['AadminID'] = $adminID;
        $_SESSION['Ausername'] = $username;
        $_SESSION['AadminName'] = $adminName;


        echo "<script>window.alert('Login successful! Welcome, Admin!')</script>";
        echo "<script>window.location='Dashboard.php'</script>";
    } else {
        echo "<script>window.alert('Admin Login Fail')</script>";
        echo "<script>window.location='AdminLogin.php'</script>";
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
    <title>SMC - Admin Login Form</title>
</head>

<body>
    <section class="register">
        <div class="login-wrapper">
            <form action="AdminLogin.php" method="POST">
                <h1>Admin Login</h1>

                <div class="input-box">
                    <div class="input-field">Admin Email :
                        <input type="email" name="txtEmail" placeholder="Enter registered email" required>
                        <i class="las la-envelope"></i>
                    </div>
                    <div class="input-field">Password :
                        <input type="password" name="txtPassword" placeholder="Enter Password" required>
                        <i class="las la-key"></i>
                    </div>
                </div>

                <label>Already have an account? <a href="AdminRegister.php" class="link-login"> Register
                        here</a></label>
                <button type="submit" name="btnLogin" class="btn">Login</button>
            </form>
        </div>
    </section>
</body>

</html>