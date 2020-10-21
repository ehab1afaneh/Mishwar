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
$email=$_SESSION['email'];
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id_f = $_GET['id_f'] . $email;
    // username and password sent from form
    $locat = mysqli_real_escape_string($conn, $_GET['loca']);
    $datett = mysqli_real_escape_string($conn, $_GET['check']);
    $email = mysqli_real_escape_string($conn, $_GET['email']);
    $time = mysqli_real_escape_string($conn, $_GET['time']);
    $price = mysqli_real_escape_string($conn, $_GET['price']);
    $sql = "SELECT * FROM person WHERE Email ='$email'";
    $sqadmin = "SELECT * FROM person WHERE type ='a' and Email ='ibraheem@gmail.com'";
    $result = mysqli_query($conn, $sql);
    $radimn = mysqli_query($conn, $sqadmin);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $read = mysqli_fetch_array($radimn, MYSQLI_ASSOC);
    $old = $row['cashback'];
    $name = $row['name'];
    $user_id = $row['id'];

    if ($old < $price) {
        $status = 'e';
        $new = $old;
    } else {
        $new = $old - $price;
        $admin = $read['cashback'] + $price;
        $sql = "UPDATE person SET cashback=$admin WHERE Email='ibraheem@gmail.com'";
        if ($conn->query($sql) === TRUE) {
            echo 'success';
        } else {
            echo 'something wrong';
        }

        $code = generateCode(16);
        $sql = "INSERT INTO `flight_tic` (`email`, `user_id`, `journey`,`ticket_code`,`Date`,`Time`,id) VALUES ('$email','$user_id','$locat','$code','$datett','$time','$id_f')";
        if ($conn->query($sql) === TRUE) {
            echo 'success';
        } else {
            echo 'something wrong';
        }

    }

    $sql = "UPDATE person SET cashback=$new WHERE Email='$email'";
    if ($conn->query($sql) === TRUE) {
        if ($old < $price) {

            header("Location:plan.php?status=5#flight_item");


        } else {
            header("Location:flightconf.php?status=6");
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    if ($_GET['page_from'] == 'u') {


        $sql = "INSERT INTO booked_confirm (place_id,status) VALUES ('$id_f','y')";
        if ($conn->query($sql) === TRUE) {
            header("Location:plan.php?status=5#flight_item");
        }
        else {
            header("Location:flightconf.php?status=6");

        }
    }
// echo $row;
}

    function generateCode($limit)
    {
        $code = '';
        for ($i = 0; $i < $limit; $i++) {
            $code .= mt_rand(0, 9);
        }
        return $code;
    }
$conn->close();



