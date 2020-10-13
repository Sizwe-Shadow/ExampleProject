<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "users";
// Create connection


$link = mysqli_connect($servername, $username, $password, $database);
$question_id = $_GET["questionID"];
$user_id = $_GET["userID"];

$query = mysqli_query($link, "select * from responses where questionID = '$question_id' and userID = $user_id");

$result = array();

if (mysqli_num_rows($query)) {

    while ($row = $query->fetch_assoc()) {

        $result[] = $row;

    }

    //returns a string
    $jsonArray = json_encode($result, true);

    //decode that string into an array
    $decode = json_decode($jsonArray);


    for ($i = 0; $i < sizeof($decode); $i++) {

        $jsonObject = $decode[$i];

//try starting by dding everything to the array and then echo the div
        $userID = "UserID";
        $questionKey = "RESP_MSG_ID";
        $messageKey = "RESP_MSG";

        $firstName = $jsonObject->$userID;
        $question = $jsonObject->$questionKey;
        $message = $jsonObject->$messageKey;

        echo "
        <!--   <a href='tobadialogbox.html' class='material-icons floating-btn'>add</a> -->
    <!--        <button onclick='document.getElementById('modal')' class='material-icons floating-btn' id='click'>add</button>-->

            <div class='card' style='margin-bottom: 0px !important;margin-top: 0px !important;width:100%;height:150px;position: center;background-color: #1eccf8; border-radius: 15px'>
                <h3><em>Student Number : $firstName</em></h3>
                <h1>Message: $message</h1>           
            </div>
            
            <div id='myModal' class='modal'>
                <!-- Modal content -->
                <div  class='modal-content'>
                    <div class='modal-header'>
                        <span class='close'>&times;</span>
                        <h2>Respond:</h2>
                    </div>
                    <div class='modal-body'>
                        <form action='insertResponse.php' method='post'>
                            <textarea id='question' class='userInput' name='question'></textarea><br><br>
                            <input type='submit' value='Submit'>
                            <input type='hidden' id='questionID' name='questionID' value='$question_id'>
                            <input type='hidden' id='stud_num' name='stud_num' value='$firstName'>
                        </form>
                    </div>
                </div>
            </div>";

    }
    session_abort();

}
else {
    echo "<div style='width:100%;height:150px;position: center;padding:10px; background-color: white; font-size: 10px'>
                <h1>There are no Responses to this question!</h1> 
                <div id='myModal' class='modal'>
                    <!-- Modal content -->
                    <div  class='modal-content'>
                        <div class='modal-header'>
                            <span class='close'>&times;</span>
                            <h2>Respond:</h2>
                        </div>
                        <div class='modal-body'>
                            <form action='insertResponse.php' method='post'>
                                <textarea id='question' class='userInput' name='question'></textarea><br><br>
                                <input type='submit' value='Submit'>
                                <input type='hidden' id='questionID' name='questionID' value='$question_id'>
                                <input type='hidden' id='stud_num' name='stud_num' value='$user_id'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>" ;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <title>Questions</title>

    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/fetchQuestions.css">

</head>
<body>

<div class='container'>
    <div style='padding-bottom: 0px' class='app'>
        <!-- Trigger/Open The Modal -->
        <button id='myBtn' class='material-icons floating-btn' >create</button>
            <script>

                // Get the modal
                let modal = document.getElementById("myModal");

                // Get the button that opens the modal
                let btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                let span = document.getElementsByClassName("close")[0];

                // When the user clicks on the button, open the modal
                btn.onclick = function() {
                    modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

            </script>
    </div>
</div>
</body>
</html>
