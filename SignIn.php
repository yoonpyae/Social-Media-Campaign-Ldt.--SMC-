<?php
session_start();
include('dbconnect.php');

if (isset($_POST['btnLogin'])) {
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPass'];


    $checkAccount = "SELECT * FROM customertb WHERE Email='$email' AND Password='$password'";
    $query = mysqli_query($connect, $checkAccount);
    $row = mysqli_num_rows($query);

    if ($row > 0) {

        $array = mysqli_fetch_array($query);
        $CID = $array['CustomerID'];
        $CUsername = $array['Username'];


        $_SESSION['CID'] = $CID;
        $_SESSION['CName'] = $CUsername;

        echo "<script>window.alert('LOGIN SUCCESSFUL!')</script>";
        echo "<script>window.location='home.php'</script>";
    } else {
        if (isset($_SESSION['logincount'])) {
            $countError = $_SESSION['logincount'];

            if ($countError == 1) {
                echo "<script>window.alert('Login Failed. Attempt 2 of 3.')</script>";
                $_SESSION['logincount'] = 2;
            } elseif ($countError == 2) {
                echo "<script>window.alert('Login Failed. Attempt 3 of 3.')</script>";
                echo "<script>window.location='WaitingRoom.php'</script>";
            }
        } else {
            echo "<script>window.alert('Login Failed. Attempt 1 of 3.')</script>";
            $_SESSION['logincount'] = 1;
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet"
    href="style/SignInstyle.css?<?php echo time(); ?>" />
  <title>SMC - Customer Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="SignIn.php" method="POST" class="sign-in-form" enctype="multipart/form-data">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" name="txtEmail" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="txtPass" placeholder="Password" />
          </div>
          <input type="submit" name="btnLogin" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        <?php
include('dbconnect.php');

if (isset($_POST['btnRegister'])) {
    $firstname = $_POST['txtFirstName'];
    $surname = $_POST['txtSurname'];
    $username = $_POST['txtUsername'];
    $address = $_POST['txtAddress'];
    $phoneNo = $_POST['txtPhoneNo'];
    $registerMonth = $_POST['cboMonth'];
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    //img upload
    $img = $_FILES['fileUserImg']['name'];
    $folder = "CustomerData/";
    $dbstorefilename = $folder.uniqid()."_".$img;
    $copy = copy($_FILES['fileUserImg']['tmp_name'], $dbstorefilename);
    if (!$copy) {
        echo "<p>Cannot Upload Profile</p>";
        exit();
    }

    $number = preg_match('@[0-9]@', $password);
    $upperChara = preg_match('@[A-Z]@', $password);
    $lowerChara = preg_match('@[a-z]@', $password);
    $specialChara = preg_match('@[^\w]@', $password);

    $checkUsername = "SELECT * FROM customertb WHERE Username='$username' AND Email='$email'";

    $checkQuery = mysqli_query($connect, $checkUsername);
    $row = mysqli_num_rows($checkQuery);

    if ($row > 0) {
        echo "<script>window.alert('Duplicate Username')</script>";
        echo "<script>window.location='SignIn.php'</script>";
    } elseif (strlen($password) < 7 || !$number || !$upperChara || !$lowerChara || !$specialChara) {
        echo "<script>window.alert('Password length must include less than 8 characters and other values')</script>";
        echo "<script>window.location='SignIn.php'</script>";

    } else {
        $insert = "INSERT INTO customertb(FirstName,Surname,	Username,	Address,	PhoneNo,	ProfileImage,	RegistrationMonth,	Email,	Password)
            VALUES ('$firstname', '$surname','$username', '$address', '$phoneNo', '$dbstorefilename', '$registerMonth', '$email', ' $password')";

        $insertQuery = mysqli_query($connect, $insert);

        if ($insertQuery) {
            echo "<script>window.alert('Congratulations, your account has been successfully created.')</script>";
            echo "<script>window.location='SignIn.php'</script>";

        }
    }
}
?>
        <form action="SignIn.php" method="POST" enctype="multipart/form-data" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="sign-up-grid">
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="txtFirstName" id="" required placeholder="First Name" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="txtSurname" id="" required placeholder="Surname" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="txtUsername" id="" required placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="userEmail" id="" required placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="userPassword" id="" required placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="txtAddress" id="" required placeholder="Address" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="txtPhoneNo" id="" required placeholder="Phone Number" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="file" name="fileUserImg" class="file-place" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <select name="cboMonth" id="">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
            </div>
            <div class="g-recaptcha " data-sitekey="6LdaM_UpAAAAAGS7yrVVfZcCyfl3JLK0yKJp3K9_">

            </div>

            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
          </div>
          <input type="submit" name="btnRegister" class="btn" value="Sign up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Sign up and discover a great amount of new opportunities!
          </p>
          <button class="btn transparent" name="btnLogin" id="sign-up-btn">Sign up</button>
        </div>
        <img src="img/otp-security.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Sign in to continue to your account.
          </p>
          <button class="btn transparent" name="btnRegister" id="sign-in-btn">Sign in</button>
        </div>
        <img src="img/sign-up-form.svg" class="image" alt="" />
      </div>
    </div>
  </div>


  <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });
  </script>
</body>

</html>