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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    echo 'post' ;
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name= mysqli_real_escape_string($conn, $_POST['name']);
    $comment= mysqli_real_escape_string($conn, $_POST['data']);
    $con= mysqli_real_escape_string($conn, $_POST['con1']);
    echo $con ;
    echo $id ;
    echo $name ;
    echo $comment ;


   $re = $name." : ".$comment ;
   $sql = "SELECT * FROM comments WHERE id='$id' " ;
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        echo 'dd' ;
        $sql = "INSERT INTO comments (id,comments,country) values ('$id','$re','$con') ";
        if ($conn->query($sql) === TRUE) {
            // echo $date ;
            echo 'add to sql insert';
            // echo $end_date ;
           header("Location: plan.php?status=3#plan_item");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        exit();
    }
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    else {
    $row=mysqli_fetch_assoc($result) ;
        $new_re = $row['comments']."\n".$re ;
       $sql = "UPDATE comments SET comments= '$new_re' WHERE id='$id' ";


       if ($conn->query($sql) === TRUE) {
           // echo $date ;
           echo 'add to sql update';
           // echo $end_date ;
           header("Location: plan.php?status=3##plan_item");
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }

       $conn->close();
   }




}
else {
    echo ' no post' ;
}


