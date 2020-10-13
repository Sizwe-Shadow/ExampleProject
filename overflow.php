<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <title>Overflow Science</title>

    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/overflow.css">

</head>
<body>

<div class="container">
    <div class="app"></div>
 <!--   <a href="tobadialogbox.html" class="material-icons floating-btn">add</a> -->
    <div class="center">
        <button onclick="document.getElementById('modal')" class="material-icons floating-btn" id="click">add</button>
        <div id="modal" class="content">
            <div class="header">
                 <h2>Question</h2>
                <label for="click" class="a fa-question-circle-o"></label>
            </div>
                <div class="line"></div>
                <label for="click" class="commentBtn">Comment</label>
        </div>
    </div>
</div>

</body>
</html>