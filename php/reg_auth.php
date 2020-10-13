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
    $name= $_POST['name'];
    $surname= $_POST['surname'];
    $student_number= $_POST['student_number'];
    $passW = $_POST['password'];
    $rePassW = $_POST['re-password'];
    $sql = "INSERT INTO `users` (`Name`, `Surname`, `UserID`, `SafeName`, `email`, `password`) VALUES ('$name','$surname', '$student_number', 'Anonymous5', '$student_number', '$passW')";
    $result = mysqli_query($conn,$sql);
    // echo ($result);

    if (mysqli_num_rows($result)>0) {
        header("Location:../index.php");
        exit();
    } else {
        echo(" authentication error ");
    }


}




?>

