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
$email=$_SESSION['eemail'];
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // username and password sent from form
    $offer = mysqli_real_escape_string($conn, $_GET['casho']);
    $spend = mysqli_real_escape_string($conn, $_GET['spendo']);
    $gift = mysqli_real_escape_string($conn, $_GET['gifto']);
    $expire = mysqli_real_escape_string($conn, $_GET['expiros']);
    $sql = "SELECT * FROM person WHERE Email ='$email'";
    $sqadmin = "SELECT * FROM person WHERE type ='a' and Email ='ibraheem@gmail.com'";
    $result = mysqli_query($conn, $sql);
    $radimn= mysqli_query($conn, $sqadmin);
  // if($result->num_rows>0){echo "suc1";}
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $read = mysqli_fetch_array($radimn,MYSQLI_ASSOC);
   $old=$row['cashback'];
   $name=$row['name'];
   if($old < $spend) {
    $status= 'e' ;
    $new=$old;
   }
   else { 
    $new=$old - $spend + $gift;
    $admin=$read['cashback'] + $spend - $gift;
    $sql = "UPDATE person SET cashback=$admin WHERE Email='ibraheem@gmail.com'";
    if ($conn->query($sql) === TRUE) {
        echo 'success';
     }
     else {
         echo 'something wrong';
     }
     $datec= strtotime(date("Y-m-d"));
     $datex=strtotime($expire);
     $diff = ($datex - $datec);
     $years = floor($diff / (365*60*60*24));
     $months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24)); 
     $days =(INT) (floor(($diff + $months*30*60*60*24)/ (60*60*24)));
    $sql ="INSERT INTO `journey` (`email`, `place`, `expier`) VALUES ('$email','$offer','$days')";
    if ($conn->query($sql) === TRUE) {
       echo 'success';
    }
    else {
        echo 'something wrong';
    }

   }
   
    $sql="UPDATE person SET cashback=$new WHERE Email='$email'";
   if ($conn->query($sql) === TRUE) {
               if($old < $spend)
               {
              
                header("Location: MyProfile.php?name=$name&status=$status"); 
                
                
               }
               else{
                header("Location: MyProfile.php?name=$name&status=$status");
               }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
       // echo $row;


