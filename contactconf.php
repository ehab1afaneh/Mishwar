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
$email = $_SESSION['email'] ;
$name = $_SESSION['name'] ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ;
    // username and password sent from form
    echo 'post';


    if (isset($_POST['status'])) {
        if($_POST['status'] == 'd') {
            $id = $_POST['id'] ;
            $sql = "DELETE FROM contact WHERE id='$id' ";
            if ($conn->query($sql) === TRUE) {
                header("Location: admin.php?status=1");
            } else {
                header("Location: admin.php?status=2");
                $conn->close();
                exit();
            }
        }
        if($_POST['status'] == 's') {
            $st='' ;
            echo 'show <br>' ;
            $sql1 = "SELECT * FROM contact WHERE id='$id'";
            $result1 = mysqli_query($conn, $sql1);
            $row1=mysqli_fetch_assoc($result1);
            if($row1['active'] == 's') {
                $st = 'h' ;
            }
            else {
                $st = 's' ;
            }
            $sql = "UPDATE contact SET active='$st' where id='$id'";
            if ($conn->query($sql) === TRUE) {
                if($st == 's') {
                    header("Location: admin.php?status=3");
                }
                else {
                    header("Location: admin.php?status=4");
                }
            } else {
                header("Location: admin.php?status=2");
                $conn->close();
                exit();
            }
        }
    }

     else {

         $sql = "SELECT * from `contact` ";

         $result = mysqli_query($conn,$sql);



         // username and password sent from form
         echo 'post' ;
         $message = mysqli_real_escape_string($conn, $_POST['message']);





         $sql = "INSERT INTO contact (name,email,message,active) values ('$name','$email','$message','h') ";
        if ($conn->query($sql) === TRUE) {
            // echo $date ;
            echo 'add to sql insert';
            // echo $end_date ;
            header("Location: contact.php?status=1");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $conn->close();
            exit();
        }

}
}
else {
    echo ' no post';
}





