<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Redirecting...</title>
    <link rel="stylesheet" href="formpageredirect.css">
    <head>
<body>

<div id="countdown-container">
    <div id="countdown">5</div>
    <div class="progress-ring">
        <div class="progress-circle">
            <div class="progress-fill"></div>
        </div>
    </div>
    <div id="countdown-label" style="color: white"> Redirecting...</div>
</div>

<script>
    var seconds = 5; // Initial countdown value
    var countdownElement = document.getElementById('countdown');

    // Update countdown every second
    var countdownInterval = setInterval(function() {
        countdownElement.textContent = seconds;
        seconds--;

        // Redirect when countdown reaches 0
        if (seconds < 0) {
            clearInterval(countdownInterval);
            window.location.href = "index.php";
        }
    }, 1000); // Update every 1 second (1000 milliseconds)
</script>
<div class="navbar">
    <a href="index.php"><i class="fa fa-fw fa-home"></i>Ga terug</a>

</div>

<h1 style="font-size: 70px; text-align: center; color: white">Successfully submitted</h1>


</body>
</html>
