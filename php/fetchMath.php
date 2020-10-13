<?php
//echo "hundred!";]
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "users";
// Create connection


$link = mysqli_connect($servername, $username, $password, $database);

$name_category = $_SESSION['name'];

$query = mysqli_query($link, "select * from questions where Category = '$name_category'");

$result = array();

if (mysqli_num_rows($query)) {

    while ($row = $query->fetch_assoc()) {

        $result[] = $row;

    }

    //returns a string
    $jsonArray = json_encode($result, true);

    //decode that string into an array
    $decode = json_decode($jsonArray);


    for($i = 0; $i < sizeof($decode); $i++){

        $jsonObject = $decode[$i];


        $userID = "UserID";
        $questionKey = "QuestionID";
        $messageKey = "Message";

        $firstName = $jsonObject->$userID;
        $question = $jsonObject->$questionKey;
        $message = $jsonObject->$messageKey;

        echo "<div class='card' style='width:100%;height:150px;position: center;padding:10px;background-color: #1eccf8;margin-top:20px; border-radius: 15px'>
           <h3><em>Student Number : $firstName</em></h3>
           <h1>Message: $message</h1>
           <button class='material-icons list' style='font-size:28px; border: none;background-color:#1eccf8'>list</button>
            </div>";

    }

}
else {
    echo " <div style='width:100%;height:150px;position: center;padding:10px; background-color: white'>
                <h1>There are no Questions regarding this field!</h1> 
            </div>" ;
}
session_destroy();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <title>Questions</title>

    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/fetchMath.css">
    <!--<link rel="stylesheet" href="../css/overflow.css">-->

</head>
<body>

<div class="container">
    <div class="app">
        <!--   <a href="tobadialogbox.html" class="material-icons floating-btn">add</a> -->
        <button onclick="document.getElementById('modal')" class="material-icons floating-btn" id="click">add</button>

    </div>
</div>

</body>
</html>



