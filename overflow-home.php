<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <title>Overflow Home</title>
    <link rel="stylesheet" href="css/overflow-home.css">
</head>
<body>
    <div class="app">
        <div class="container">
            <div class="column">

                <a href="php/fetchQuestions.php?name=Science" >
                    <div class="card">
                        <div class="card-image science">
                            <div class="banner"></div>
                            <h1>Science</h1>
                        </div>
                    </div>
                </a>

                <a href="php/fetchQuestions.php?name=Math">
                    <div class="card">
                        <div class="card-image Math">
                            <div class="banner"></div>
                            <h1>Math</h1>
                        </div>
                    </div>
                </a>
                <a href="php/fetchQuestions.php?name=Arts">
                    <div class="card">
                        <div class="card-image Arts">
                            <div class="banner"></div>
                            <h1>Arts</h1>
                        </div>
                    </div>
                </a>
                <a href="php/fetchQuestions.php?name=Accounting">
                    <div class="card">
                        <div class="card-image Accounting">
                            <div class="banner"></div>
                            <h1>Accounting</h1>
                        </div>
                    </div>
                </a>
                <a href="php/fetchQuestions.php?name=Biology">
                    <div class="card">
                        <div class="card-image Biology">
                            <div class="banner"></div>
                            <h1>Biology</h1>
                        </div>
                    </div>
                </a>
                <a href="php/fetchQuestions.php?name=Politics">
                    <div class="card">
                        <div class="card-image Politics">
                            <div class="banner"></div>
                            <h1>Politics and Law</h1>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

</body>


</html>