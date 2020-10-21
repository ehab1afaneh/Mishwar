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
    $type = $_POST['type'] ;
    $place_id =  $_POST['place_id'];
    $email =  $_POST['email'];
    $place_name =  $_POST['place_name'];
    $photo =  $_POST['photo'];
    $lat = $_POST['lat'] ;
    $lng = $_POST['lng'] ;
    $id = $email . '' . $place_id;
    $address = $_POST['address'];
    $price = $_POST['price'] ;




    if ($_POST['status'] == 'h' ) {

        $sql = "INSERT INTO places (place_id ,type,name,address,price,photo,lat,lng) 
  			  VALUES ('$place_id','hotel','$place_name','$address','$price','$photo','$lat','$lng')";

        if ($conn->query($sql) === TRUE) {
            echo 'inserted into place <br>';
        } else {
            echo ' error inserted into place <br>';
        }

        if ($type == 'f') {
            $sql = "INSERT INTO favorite (id,place_id ,email) 
  			  VALUES ('$id','$place_id','$email')";

            if ($conn->query($sql) === TRUE) {
                echo 'insert to faf <br>';
               // header("Location: hotels.php?status=3");
            } else {
                printf("Error: %s\n", mysqli_error($conn));
                //echo ' error insert to faf <br>';
                exit();
            }
        } else {

            $day_number = $_POST['day_number'];
            $people_number = $_POST['number_people'];
            $room_number = $_POST['number_room'];
            $name = $_POST['name'];

            $sql = "SELECT * FROM hotels WHERE place_id = '$place_id' ";
            $result = mysqli_query($conn, $sql);
            // if($result->num_rows>0){echo "suc1";}
            if (!$result) {
                header("Location: hotels.php?status=5#cont");
                exit();
            }
            // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


            //$count = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)) {
                //echo 'done' ;
                // echo $row['price']."$";
                $room = $row['room_empty'];
                $price = $row['price'];
                $people = $row['person_free'];
                if ($people_number <= $people && $room_number <= $room) {
                    $date = date("Y-m-d");
                    $date1 = $date;
                    $date = date_create($date);

                    $date1 = date_create($date1);

                    //  echo date_format($date, 'Y-m-d'); ;


                    $end_date = date_add($date1, date_interval_create_from_date_string("$day_number days"));
                    // $end_date = date_create($end_date) ;
                    echo date_format($date, 'Y-m-d');;
                    echo '<br>';
                    echo date_format($end_date, 'Y-m-d');;

                    $date = date_format($date, 'Y-m-d');
                    $end_date = date_format($end_date, 'Y-m-d');

                    echo '<br>';


                    $sql = "INSERT INTO booked_item (id ,place_id,user_email,type,number_day,start_date,end_date,time_f) 
  			  VALUES ('$id','$place_id','$email','hotel', '$day_number','$date' ,'$end_date','')";


                    if ($conn->query($sql) === TRUE) {

                    } else {

                          header("Location: hotels.php?status=2#cont");
                    }

                }
            }
        }
        $sql = "SELECT * FROM popular WHERE place_id = '$place_id' ";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 0) {
            echo 'dd';
            $sql = "INSERT INTO popular (place_id,count_n,country) values ('$place_id',1,'$country') ";
            if ($conn->query($sql) === TRUE) {

                header("Location: hotels.php?status=1#cont");
            } else {

                header("Location: hotels.php?status=2#cont");
            }

            $conn->close();

            exit();
        } // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        else {
            $row = mysqli_fetch_assoc($result);
            $new_count = $row['count_n'] + 1;
            $sql = "UPDATE popular SET count_n= '$new_count' WHERE place_id='$place_id' ";


            if ($conn->query($sql) === TRUE) {

                header("Location: hotels.php?status=1#cont");
            } else {

                header("Location: hotels.php?status=2#cont");
            }

            $conn->close();
        }
    }



    if ($_POST['status'] == 'f') {
       // echo 'flights';
        $flight_id = $_GET['id'];

        $sql = "SELECT * FROM flights WHERE id = '$flight_id' ";
        $result = mysqli_query($conn, $sql);
        // if($result->num_rows>0){echo "suc1";}
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


        //$count = mysqli_num_rows($result);

        while ($row = mysqli_fetch_assoc($result)) {
            $airport = $row['the_airport'];
            $date_flight = $row['date_take_of'];
            $time_flight = $row['time'];
            $id_f = $email.$flight_id;
            $price_flight = $row['price'];

            $sql = "INSERT INTO booked_item (id ,place_id,user_email, number_day,start_date,end_date,time_f) 
  			  VALUES ('$id_f','$flight_id','$email', '','$date_flight','' ,'$time_flight')";


            if ($conn->query($sql) === TRUE) {
                // echo $date ;
                echo 'add to sql';
                // echo $end_date ;
                header("Location: plane.php?status=6");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }


    }

    }



