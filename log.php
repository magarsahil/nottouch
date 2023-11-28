<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "databsefarmer";

$conn = new mysqli($hostname, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Start a session and store user data
            session_start();
            $_SESSION["id"] = $row["id"];
            $_SESSION["email"] = $row["email"];
            
            // Redirect to dashboard.php
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>
