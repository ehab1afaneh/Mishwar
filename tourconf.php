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
//echo "Connected successfully";
session_start();
$email = $_SESSION['email'] ;
$country = $_SESSION['country'] ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $place_id = $_POST['place_id'];

    $place_name = $_POST['place_name'];
    $photo = $_POST['photo'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $id = $email . '' . $place_id;
    $address = $_POST['address'];
    $price = $_POST['price'];
    $id = $email . '' . $place_id;

    $sql = "INSERT INTO places (place_id ,type,name,address,price,photo,lat,lng) 
  			  VALUES ('$place_id','tour','$place_name','$address','$price','$photo','$lat','$lng')";

    if ($conn->query($sql) === TRUE) {

    }


    if ($type == 'f') {
        $sql = "INSERT INTO favorite (id,place_id ,email) 
  			  VALUES ('$id','$place_id','$email')";
    } else {

        $sql = "INSERT INTO booked_item (id,place_id ,user_email,type) 
  			  VALUES ('$id','$place_id','$email','tour')";
    }


    if ($conn->query($sql) === TRUE) {

        $sql = "SELECT * FROM popular WHERE place_id = '$place_id' ";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 0) {
            echo 'dd';
            $sql = "INSERT INTO popular (place_id,count_n,country) values ('$place_id',1,'$country') ";
            if ($conn->query($sql) === TRUE) {
                if ($type == 'b') {
                    header("Location: tours.php?status=1#cont");
                } else {
                    header("Location: tours.php?status=3#cont");
                }
                echo 'new';
            } else {
                if ($type == 'b') {
                    header("Location: tours.php?status=2#cont");
                } else {
                    header("Location: tours.php?status=4#cont");
                }
            }

            $conn->close();

            exit();
        } // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        else {
            $row = mysqli_fetch_assoc($result);
            $new_count = $row['count_n'] + 1;
            $sql = "UPDATE popular SET count_n= '$new_count' WHERE place_id='$place_id' ";


            if ($conn->query($sql) === TRUE) {
                if ($type == 'b') {
                    header("Location: tours.php?status=1#cont");
                    $conn->close();
                } else {
                    header("Location: tours.php?status=3#cont");
                    $conn->close();
                }


            } else {
                if($type == 'b') {
                    header("Location: tours.php?status=2#cont");
                }
                else {
                    header("Location: tours.php?status=4#cont");
                }

            }
        }
    }
    else {
        if($type == 'b') {
            header("Location: tours.php?status=2#cont");
        }
        else {
            header("Location: tours.php?status=4#cont");
        }
    }
}








