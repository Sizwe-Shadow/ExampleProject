<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
    <div class="container" >
        <div class="app">
            <h1 class="page-heading">LOGIN</h1>
            <img src="img/witskudus.png" width="auto" height="auto" class="center">
            <form action="php/login_auth.php" method="post">
                <div class="login-container">
                    <div class="form-control">
                        <input type="text" id="student_no" class="StudentNumber" name="Student_Number" placeholder="Student Number" required="">
                    </div>
                    <div class="form-control">
                        <input type="password" id="password" class="password" name="Password" placeholder="Student Password" required="">
                    </div>
                    <button id="loginButton" class="signin-button" type="submit">Sign In</button>
                </div>
            </form>
        </div>

    </div>
</body>
</html>