<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="css/index.css">
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        ></script>
</head>
<body>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="php/login_auth.php" method="post" class="sign-in-form">

                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id="student_no" class="StudentNumber" name="Student_Number" placeholder="Student Number" required="">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" class="password" name="Password" placeholder="Student Password" required="">
                    </div>

                    <input type="submit" value="Login" class="btn solid">
                    <p class="social-text">Or Sign in using these platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>


                <form action="php/reg_auth.php" method="post" class="sign-up-form">

                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-id-card"></i>
                        <input type="text" id="name" placeholder="Name">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-id-card"></i>
                        <input type="text" id="surname" placeholder="Surname">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id="student_number" placeholder="Student Number">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" placeholder="Password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="re-password" placeholder="Re-enter Password">
                    </div>

                    <input type="submit" value="Sign up" class="btn solid">
                    <p class="social-text">Or Sign up using these platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

            </div>


        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Student ?</h3>
                    <p>Click the Sign-up button to become one of us and conquer the world through knowledge</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>

                <img src="img/proud.svg" class="image" alt="">

            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Already a Witsie?</h3>
                    <p>Click the Sign-in button and continue to conquer the edge or let course push you over the edge</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>

                <img src="img/researching.svg" class="image" alt="">

            </div>
        </div>

    </div>

    <script src="js/app.js"></script>
    
</body>
</html>