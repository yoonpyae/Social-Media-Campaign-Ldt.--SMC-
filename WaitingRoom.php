<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="UIStyle.css" />
    <title>SMC - Waiting Room</title>
  </head>
  <body>
<main class="WR">
    <div class="waitingRoom">
      <div class="Message">
        <h1>Whoops!  </h1>
      <h2>Something went wrong. <br> Please try again in   </h2>
        <h3>
            <span id="countDown">
                60
            </span>
            seconds
        </h3>
        <p>
        You have exceeded the maximum number of login attempts.
        </p>
      </div>
      <img src="img/Cat.gif" alt="not found" />
      
    </div>

    <script text="text/javascript">
        var seconds = 600;

        function updateCountDown() {
            document.getElementById('countDown').textContent = seconds;
            seconds--;

            if (seconds < 0) {
                window.location.href = 'SignIn.php';
            }
        }

        setInterval(updateCountDown, 1000);
    </script>
  </body>
  </main>
</html>