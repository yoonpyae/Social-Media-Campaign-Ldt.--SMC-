<?php
session_start();
include('dbconnect.php');


if (!isset($_SESSION['CID'])) {
    echo "<script>window.alert('You haven't sign in/up yet!')</script>";
    echo "<script>window.location='SignIn.php'</script>";
}

if (isset($_GET['PID'])) {
    $PaymentID = $_GET['PID'];
    $dbquery = "SELECT * FROM Campaigntb c,  CampaignTypetb ct, Mediatb m 
                  WHERE c.CampaignTypeID=ct.CampaignTypeID
                  AND c.MediaID=m.MediaID

                  AND c.CampaignID='$PaymentID'";

    $result = mysqli_query($connect, $dbquery);
    $array = mysqli_fetch_array($result);
    $CID = $array['CampaignID'];
    $Cname = $array['CampaignName'];
    $Aim = $array['Aim'];
    $Vision = $array['Vision'];
    $Fees = $array['Fees'];
    $Location = $array['Location'];
    $StartDate = $array['StartDate'];
    $EndDate = $array['EndDate'];
    $Desciption = $array['Desciption'];
    $CampaignImage1 = $array['CampaignImage1'];
    $CampaignImage2 = $array['CampaignImage2'];
    $CampaignImage3 = $array['CampaignImage3'];

    $CampaignStatus = $array['CampaignStatus'];

    $CampaignTypeName = $array['CampaignTypeName'];
    $MediaName = $array['MediaName'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="style/Paymentstyle.css">
    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

    <title>Payment Page</title>
</head>

<body>

    <!-- start: Payment -->
    <section class="payment-section">
        <div class="container">
            <form action="Payment.php" method="GET" class="payment-wrapper">
                <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-icon"><i class="ri-flashlight-fill"></i></div>
                        <div class="payment-header-title">Payment Summary</div>
                        <p class="payment-header-description">Please check the information before participating in a
                            campaign.</p>
                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-plan">
                                <div class="payment-plan-type">
                                    <?php echo $CID; ?>
                                </div>
                                <div class="payment-plan-info">
                                    <div class="payment-plan-info-name">
                                        <?php echo $Cname; ?>
                                    </div>
                                    <div class="payment-plan-info-price">
                                        <?php echo $Fees; ?>$ per
                                        person
                                    </div>
                                </div>
                                <a href="Infomation.php" class="payment-plan-change">Change</a>
                            </div>
                            <div class="payment-summary">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Customer Name</div>
                                    <div class="payment-summary-price">
                                        <?php echo   $_SESSION['CName'] ?>

                                    </div>
                                </div>

                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Start Date</div>
                                    <div class="payment-summary-price">
                                        <?php echo $StartDate; ?>
                                    </div>
                                </div>
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">End Date</div>
                                    <div class="payment-summary-price">
                                        <?php echo $EndDate; ?>
                                    </div>
                                </div>
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Total Qty</div>
                                    <div class="payment-summary-price">1</div>
                                </div>
                                <div class="payment-summary-divider"></div>
                                <div class="payment-summary-item payment-summary-total">
                                    <div class="payment-summary-name">Total</div>
                                    <div class="payment-summary-price">
                                        <?php echo $Fees; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-right">
                    <form action="" class="payment-form">
                        <h1 class="payment-title">Payment Details</h1>
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="method-1" checked>
                            <label for="method-1" class="payment-method-item">
                                <img src="images/visa.png" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-2">
                            <label for="method-2" class="payment-method-item">
                                <img src="images/mastercard.png" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-3">
                            <label for="method-3" class="payment-method-item">
                                <img src="images/paypal.png" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-4">
                            <label for="method-4" class="payment-method-item">
                                <img src="images/stripe.png" alt="">
                            </label>
                        </div>
                        <div class="payment-form-group">
                            <input type="email" placeholder=" " class="payment-form-control" id="email">
                            <label for="email" class="payment-form-label payment-form-label-required">Email
                                Address</label>
                        </div>
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="card-number">
                            <label for="card-number" class="payment-form-label payment-form-label-required">Card
                                Number</label>
                        </div>
                        <div class="payment-form-group-flex">
                            <div class="payment-form-group">
                                <input type="date" placeholder=" " class="payment-form-control" id="expiry-date">
                                <label for="expiry-date" class="payment-form-label payment-form-label-required">Expiry
                                    Date</label>
                            </div>
                            <div class="payment-form-group">
                                <input type="text" placeholder=" " class="payment-form-control" id="cvv">
                                <label for="cvv" class="payment-form-label payment-form-label-required">CVV</label>
                            </div>
                        </div>
                        <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i>
                            Pay</button>
                    </form>
                </div>
            </form>
        </div>
    </section>
    <!-- end: Payment -->

</body>

</html>