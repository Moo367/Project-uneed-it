<?php
session_start();

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $admin_username = "admin";
    $admin_password = "admin"; //

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION["admin"] = true;
        $success_message = "Successful login";

        header("Location: adminpage.php");
        exit; //
    } else {
        $error_message = "Incorrect username or password.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Uneed-It</title>
    <script src="https://kit.fontawesome.com/7b49be9210.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loginadmin.css">
</head>
<body>

<div class="navbar">
    <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>

</div>

<div class="login-container">
    <h2>Login</h2>
    <?php
    if (isset($error_message)) {
        echo '<p class="error">' . $error_message . '</p>';
    }
    if (isset($success_message)) {
        echo '<p class="success">' . $success_message . '</p>';
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button id="button" type="submit">Login</button>
    </form>
</div>




</body>
</html>