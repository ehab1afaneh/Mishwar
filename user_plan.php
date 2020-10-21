<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli("localhost", "root", "","mishwar");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

session_start();

if(isset($_SESSION['email']) ) {
    $email = $_SESSION['email'] ;

}
else {
    header("location: ./Login_v3/login.php");
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
   if(isset($_GET['names'])) {
       $names = explode(',', $_GET['names']);
       $dates = explode(',', $_GET['dates']);
       $days = explode(',', $_GET['days']);

       print_r($names) ;
       echo '<br>' ;
       print_r($dates) ;
       echo '<br>' ;
       print_r($days) ;
   }
   $array_size=count($names);
   for ($x=0;$x<$array_size;$x++) {
       echo $email.'<br>';


           $sql1 = "SELECT * FROM places WHERE name='$names[$x]'  ";
           $result1 = mysqli_query($conn, $sql1);
           $row1 = mysqli_fetch_assoc($result1);

           $lat = $row1['lat'];
           $lng = $row1['lng'];
           $id =$email.$row1['place_id'];
           $time = strtotime($dates[$x]);
           $sql2 = "UPDATE booked_item SET number_day = '$days[$x]' WHERE id= '$id'" ;
       if ($conn->query($sql2) === TRUE) {
           // echo $date ;
           echo 'add to sql';
           // echo $end_date ;
          // header("Location: plan.php?status=1");
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }
           $new_date = date('Y-m-d',$time);
           $y = $x +1 ;
           $sql = "INSERT INTO plan (id,email, place_name, date, day,lat,lng,order_places) 
  			  VALUES ('$id','$email','$names[$x]','$new_date','$days[$x]','$lat','$lng','$y')";
           if ($conn->query($sql) === TRUE) {
               // echo $date ;
               echo 'add to sql';
               // echo $end_date ;
               header("Location: plan.php?status=1#plan");
           } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
           }
       }

}
else {
    echo ' no post' ;
}


