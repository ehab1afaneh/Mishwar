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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $del = mysqli_real_escape_string($conn, $_POST['id']);


    $sql = "SELECT * FROM booked_item WHERE id = '$del' ";
    $result = mysqli_query($conn, $sql);
  // if($result->num_rows>0){echo "suc1";}
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
   // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

   if($row=mysqli_fetch_assoc($result)){
            $sql = "DELETE FROM `booked_item` WHERE `id` = '$del'";


            if ($conn->query($sql) === TRUE) {
                $sql = "DELETE FROM `plan` WHERE `id` = '$del'";
                if ($conn->query($sql) === TRUE) {
                    header("Location: plan.php?status=2#plan_item");
                }

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
       // echo $row;
}

