<?php
// Set up database connection
$servername = "localhost"; // replace with your server name
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "easyzon"; // replace with your database name
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Login successful - redirect to dashboard
            header("Location: ../admin/dashboard.php");
            exit();
        } else {
            // Incorrect password - show error message
            header("Location: login.php?error");
            exit();
        }
    } else {
        // Email not found - show error message
        header("Location: login.php?error");
        exit();
    }
}

// Close database connection
mysqli_close($conn);
?>
