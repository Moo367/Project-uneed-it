<?php
session_start();

// Check if user is logged in as admin
if (!isset($_SESSION["admin"]) || $_SESSION["admin"]!== true) {
    // Redirect to login page if not logged in as admin
    header("Location: login.php");
    exit;
}

// Establish connection to MySQL database
$servername = "localhost";
$username = "root"; // Default username for XAMPP MySQL
$password = ""; // Default password for XAMPP MySQL
$database = "user reviews";
$conn = new mysqli($servername, $username, $password, $database);

$result = $conn->query("SELECT id, name, email, message, created_at FROM reviews WHERE accepted = 1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Check if the accept button is clicked and the review ID is provided
if (isset($_POST["accept"], $_POST["review_id"])) {
    // Sanitize the review ID to prevent SQL injection
    $review_id = intval($_POST["review_id"]);

    // Update the review status in the database to indicate acceptance
    $sql = "UPDATE reviews SET accepted = 1 WHERE id =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $review_id);

    if ($stmt->execute()) {
        // Acceptance successful
        header("Location: adminpage.php"); // Redirect back to admin page
        exit; // Stop further execution
    } else {
        // Error occurred
        echo "Error: ". $stmt->error;
    }

    $stmt->close();
}
// Fetch accepted reviews from the database

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
// Check if the delete button is clicked and the review ID is provided
if (isset($_POST["delete"], $_POST["review_id"])) {
    // Sanitize the review ID to prevent SQL injection
    $review_id = intval($_POST["review_id"]);

    // Delete the review from the database
    $sql = "DELETE FROM reviews WHERE id =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $review_id);

    if ($stmt->execute()) {
        // Deletion successful
        header("Location: adminpage.php"); // Redirect back to admin page
        exit; // Stop further execution
    } else {
        // Error occurred
        echo "Error: ". $stmt->error;
    }

    $stmt->close();
}

// Check if the delete selected button is clicked
if (isset($_POST["delete_selected"])) {
    // Check if any reviews are selected for deletion
    if (isset($_POST["selected_reviews"]) && is_array($_POST["selected_reviews"])) {
        // Loop through the selected reviews and delete each one
        foreach ($_POST["selected_reviews"] as $selected_review) {
            // Sanitize the review ID to prevent SQL injection
            $review_id = intval($selected_review);

            // Delete the review from the database
            $sql = "DELETE FROM reviews WHERE id =?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $review_id);
            $stmt->execute();
            $stmt->close();
        }

        // Redirect back to admin page after deletion
        header("Location: adminpage.php");
        exit; // Stop further execution
    }
}

// Query the database to retrieve accepted reviews
$sql = "SELECT id, name, email, message, created_at FROM reviews WHERE accepted = 1";
$result = $conn->query($sql);

// Store accepted reviews data in session variable
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

<div class="navbar">
    <!-- Navbar links -->
</div>

<div class="scroll-box">
    <?php
    // Fetch data from the database
    $sql = "SELECT id, name, email, message, created_at FROM reviews";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Check if the review has already been accepted
            $accepted = false;
            foreach ($_SESSION["accepted_reviews"] as $existing_review) {
                if ($existing_review['id'] == $row['id']) {
                    $accepted = true;
                    break;
                }
            }

            // Display the review if it has not been accepted
            if (!$accepted) {
                // Display each row's information in a box
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
            // Add delete button
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
<a href="login.php">Logout</a>

<div class="footer">
    <!-- Footer content -->
</div>

</body>
</html>

<?php
$conn->close();
?>
