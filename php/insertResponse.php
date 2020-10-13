<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "users");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else {
// Attempt insert query execution

    $response = $_POST['question'];
    $questionID = $_POST['questionID'];
    $student_number = $_POST['stud_num'];

    $sql = "INSERT INTO `responses` (`RESP_MSG_ID`, `RESP_MSG`, `RESP_DATE`, `RESP_VOTES`, `QuestionID`, `UserID`) VALUES (NULL,'$response', CURRENT_DATE, '0', '$questionID', '$student_number')";
    if (mysqli_query($link, $sql)) {
        echo "Records inserted successfully.";
        header("Location:dispComments.php?questionID=$questionID&userID=$student_number");
        exit();
    } else {
        echo "Enter Student number in the student number field!!";
//        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

// Close connection
    mysqli_close($link);
}