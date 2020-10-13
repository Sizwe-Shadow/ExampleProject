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

    $question = $_POST['question'];
    $field = $_POST['field'];
    $student_number = $_POST['stud_num'];

    $sql = "INSERT INTO `questions` (`QuestionID`, `Message`, `Date`, `Votes`, `Username`, `UserID`, `Category`) VALUES (NULL,'$question', CURRENT_DATE, '0', '$student_number', '$student_number', '$field')";
    if (mysqli_query($link, $sql)) {
        echo "Records inserted successfully.";
        header("Location:fetchQuestions.php?name=$field");
        exit();
    } else {
        echo "Enter Student number in the student number field!!";
//        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

// Close connection
    mysqli_close($link);
}