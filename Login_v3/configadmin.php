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
 echo 'success <br>' ;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form
     echo 'post' ;
     $myusername = mysqli_real_escape_string($conn, $_POST['username']);
     $mypassword = mysqli_real_escape_string($conn, $_POST['pass']);
     $mytype = "a";
     echo $mypassword ;
     echo '<br>' ;
echo $myusername ;
echo '<br>' ;
echo $mytype;
     $password1 = md5($mypassword);//encrypt the password before saving in the database


     $sql = "SELECT * FROM person WHERE Email = '$myusername' and password = '$password1' and type='$mytype' "  ;
     
     $result = mysqli_query($conn, $sql);
     if (!$result) {
         echo 'no table' ;
       
         exit();
     }
    

     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
     
     
     $count = mysqli_num_rows($result);
     $name =  $row['name'];
     echo $count;
     if ($count == 1) { 
         echo "eiufu";
         header("Location: ../admin.php?email=$myusername&name=$name");
         exit();
        
     }
      else {
        echo 'after sql' ;
         $error = "Your Login Name or Password is invalid";
     }
     
     
}
 else { 
     echo ' no post' ;
 }


