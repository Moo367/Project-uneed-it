<?php
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"]!== true) {
    header("Location: login.php");
    exit;
}

$servername = "localhost";
$username = "root"; //
$password = ""; //
$database = "user reviews";
$conn = new mysqli($servername, $username, $password, $database);

$result = $conn->query("SELECT id, name, email, message, created_at FROM reviews WHERE accepted = 1");

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if (isset($_POST["accept"], $_POST["review_id"])) {
    $review_id = intval($_POST["review_id"]);

    $sql = "UPDATE reviews SET accepted = 1 WHERE id =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $review_id);

    if ($stmt->execute()) {
        header("Location: adminpage.php");
        exit;
    } else {
        echo "Error: ". $stmt->error;
    }

    $stmt->close();
}

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["accepted_reviews"][] = $row;
        }
    } else {
        echo "No accepted reviews found.";
    }
} else {
    echo "Error: ". $conn->error;
}
while ($row = $result->fetch_assoc()) {
    $_SESSION["accepted_reviews"][] = $row;
}
if (isset($_POST["delete"], $_POST["review_id"])) {
    $review_id = intval($_POST["review_id"]);

    $sql = "DELETE FROM reviews WHERE id =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $review_id);

    if ($stmt->execute()) {
        header("Location: adminpage.php");
        exit;
    } else {
        echo "Error: ". $stmt->error;
    }

    $stmt->close();
}

if (isset($_POST["delete_selected"])) {
    if (isset($_POST["selected_reviews"]) && is_array($_POST["selected_reviews"])) {
        foreach ($_POST["selected_reviews"] as $selected_review) {
            $review_id = intval($selected_review);

            $sql = "DELETE FROM reviews WHERE id =?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $review_id);
            $stmt->execute();
            $stmt->close();
        }

        header("Location: adminpage.php");
        exit;
    }
}

$sql = "SELECT id, name, email, message, created_at FROM reviews WHERE accepted = 1";
$result = $conn->query($sql);

$_SESSION["accepted_reviews"] = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION["accepted_reviews"][] = $row;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Mode</title>
    <link rel="stylesheet" href="adminpage.css">
</head>
<body>


<div class="scroll-box">
    <?php
    $sql = "SELECT id, name, email, message, created_at FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $accepted = false;
            foreach ($_SESSION["accepted_reviews"] as $existing_review) {
                if ($existing_review['id'] == $row['id']) {
                    $accepted = true;
                    break;
                }
            }

            if (!$accepted) {
                echo '<div class="review-box">';
                echo '<p><strong>id:</strong> ' . $row["id"] . '</p>';
                echo '<p><strong>Name:</strong> ' . $row["name"] . '</p>';
                echo '<p><strong>Email:</strong> ' . $row["email"] . '</p>';
                echo '<p><strong>Message:</strong> ' . $row["message"] . '</p>';
                echo '<form method="post">';
                echo '<input type="hidden" name="review_id" value="' . $row["id"] . '">';
                echo '<button type="submit" name="accept">Accept</button>';
                echo '<button type="submit" name="delete">Delete</button>';
                echo '</form>';
                echo '</div>';
            }
        }
    } else {
        echo "No reviews found.";
    }
    ?>
    <div class="accepted-reviews" style="background-color: green; color: white;">
        <h3>Accepted Reviews</h3>
        <?php
        foreach ($_SESSION["accepted_reviews"] as $review) {
            echo "<p>{$review['name']} - {$review['email']} - {$review['message']}</p>";
        }
        ?>
    </div>
    <?php
    if (!empty($_SESSION["accepted_reviews"])) {
        echo "<ul>";
        foreach ($_SESSION["accepted_reviews"] as $review) {
            echo "<li style='background-color: white; color: green;'>";
            echo "<p>Id: ". $review['id']. "</p>";
            echo "<p>Name: ". $review['name']. "</p>";
            echo "<p>Email: ". $review['email']. "</p>";
            echo "<p>Message: ". $review['message']. "</p>";
            echo "<form action='adminpage.php' method='post'>";
            echo "<input type='hidden' name='review_id' value='". $review['id']. "'>";
            echo "<button type='submit' name='delete'>Delete</button>";
            echo "</form>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "No accepted reviews.";
    }
    ?>
</div>
<div class="scroll22">
    <div class="scroll-content">
        <p> No reparaties found</p>
    </div>
</div>
<style>
    /* Style moet hier want in de css file pakt het niet op */
    .scroll22{
        width: 500px;
        height: 600px;
        overflow: auto;
        border: 1px solid #ccc;
        padding: 10px;
        background-color: grey ;
        margin: -630px 700px;
    }


    .scroll-content {

    }
</style>

<a href="login.php">Logout</a>

<div class="footer">
</div>

</body>
</html>

<?php
$conn->close();
?>
