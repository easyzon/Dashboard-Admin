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
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, phone, email, password)
            VALUES ('$name', '$phone', '$email', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        // echo "Registration successful!";
        // $success = 0;
        // header("location : login.php?success=$success");
    } 
    else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // $success = 1;
        // header("location : login.php?success=$success");
    }
}

// Close database connection
// mysqli_close($conn);
?>
