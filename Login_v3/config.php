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
     $myusername = mysqli_real_escape_string($conn, $_POST['username']);
     $mypassword = mysqli_real_escape_string($conn, $_POST['pass']);
     $mytype = "user";

     $password1 = md5($mypassword);//encrypt the password before saving in the database


     $sql = "SELECT * FROM person WHERE Email = '$myusername' and password = '$password1'  "  ;
     
     $result = mysqli_query($conn, $sql);
     $count = mysqli_num_rows($result);
     if ($count == 0) {
         header("Location: login.php?error=e");
       
         exit();
     }
    

     while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
     
     

     echo $row['type'] ;

     if ($count == 1) {
         $type = $row['type'] ;
         if ($type == 'a') {

             $name =  $row['name'];
             $_SESSION['name'] = $name ;
             $_SESSION['email'] = $myusername ;
             echo "admin" ;
             header("Location: ../admin.php");
         }
         else {
             $name =  $row['name'];
             $_SESSION['name'] = $name ;
             $_SESSION['email'] = $myusername ;
             header("Location: ../indexphp.php");
         }
         exit();
        
     }
      else {
        echo 'after sql' ;
         $error = "Your Login Name or Password is invalid";
     }
     }
     
}
 else { 
     echo ' no post' ;
 }


