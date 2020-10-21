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

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = "";
$email = "";
$birhtdate = "";
$gender = "";
$password_1 = "";
$password_2 = "";

  $username = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password-1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password-2']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $birhtdate= $_POST['birthdate'];
  $country = $_POST['country'] ;

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM person WHERE Email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
  $user = mysqli_fetch_assoc($result);

 if ($user['email'] === $email) {

 }

  $type = "user";
  // Finally, register user if there are no errors in the form

      $password = md5($password_1);//encrypt the password before saving in the database
    echo "done";
      $query = "INSERT INTO person (birthdate, Email, gender, name, password, type,country) 
  			  VALUES('$birhtdate','$email','$gender','$username' , '$password', '$type','$country')";

    if ($conn->query($query) === TRUE) {
        // echo $date ;

        // echo $end_date ;
        header("Location: ../Login_v3/login.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";



}
?>