<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli("localhost", "root", "", "mishwar");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$name=$_SESSION['name'];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // username and password sent from form
    $offer = mysqli_real_escape_string($conn, $_GET['offer']);
    $spend = mysqli_real_escape_string($conn, $_GET['spend']);
    $gift = mysqli_real_escape_string($conn, $_GET['gift']);
    $expire = mysqli_real_escape_string($conn, $_GET['expire']);
    $sql ="INSERT INTO `cashback_gift` (`cash_offers`, `spend`, `cash_gift`, `expires`)
     VALUES ('$offer','$spend','$gift','$expire')";
    if ($conn->query($sql) === TRUE) {


            header("Location: admin.php?name=$name");



    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
// echo $row;


