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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // username and password sent from form
    $del = mysqli_real_escape_string($conn, $_GET['username']);
    $coin = (int)$_GET['paid'];
    $sql = "SELECT * FROM person WHERE Email ='$del'";
    $result = mysqli_query($conn, $sql);
    // if($result->num_rows>0){echo "suc1";}
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $old = (int)$row['cashback'];
    $e_mail = $del;
    $new = $old + $coin;
    echo $coin;
    echo $new;
    $count = mysqli_num_rows($result);
    $sql = "UPDATE person SET cashback='$new' WHERE Email='$e_mail'";
    if ($conn->query($sql) === TRUE) {
        header('Location: cashback.php?status=1&number=' . $new . '');

    } else {
        echo 'error';
    }

}


