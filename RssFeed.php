<?xml version="1.0" encoding="UTF-8"?>

<rss version='2.0'>
    <channel>
        <title>Social Media Campaign (SMC)</title>
        <?php
include('dbconnect.php');
        header('content-Type:text/xml');

        $feed = "SELECT * FROM rssfeed Order By RssFeedID desc";
        $feedquery = mysqli_query($connect, $feed);
        $num = mysqli_num_rows($feedquery);

        for($i = 0; $i < $num; $i++) {
            $row = mysqli_fetch_array($feedquery);

            echo "<item>";
            echo "<title>".$row['Title']."</title>";
            echo "<des>".$row['Description']."</des>";
            echo "<url>".$row['URL']."</url>";
            echo"</item>";
        }
        ?>
    </channel>
</rss>