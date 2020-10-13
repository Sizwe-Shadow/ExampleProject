<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
            $student_number = $_POST['Student_Number'];
            $passW = $_POST['Password'];
            $sql = "select * from users where UserID = '$student_number' and password = '$passW'";
            $result = mysqli_query($conn,$sql);
           // echo ($result);

           if (mysqli_num_rows($result)>0) {
                 header("Location:../home.php");
                  exit();
            } else {
                echo(" wrong details");
                }


}




?>

