<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "databsefarmer";

$conn = mysqli_connect($host, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
    echo("connect db.");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["name"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $email = $_POST["email"];
    
        $sql = "INSERT INTO user (name, password, email) VALUES ('$username', '$password', '$email')";
         if ($conn->query($sql) === TRUE) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>