<?php
$servername = "localhost";
$username = "root"; //
$password = ""; //
$database = "user reviews";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $created_at = date("Y-m-d H:i:s");

    $sql = "INSERT INTO reviews (name, email, message, created_at) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in prepare statement: " . $conn->error);
    }

    $bind_result = $stmt->bind_param("ssss", $name, $email, $message, $created_at);
    if (!$bind_result) {
        die("Error in binding parameters: " . $stmt->error);
    }

    if ($stmt->execute()) {
        echo "Review submitted successfully!<br>";
    } else {
        echo "Error: " . $stmt->error . "<br>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Review</title>
    <script>
        function redirect() {
            setTimeout(function() {
                window.location.href = 'form_page.php';
            }, 5);
        }
    </script>
</head>
<body onload="redirect()">

<?php
?>

</body>
</html>
