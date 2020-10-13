<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
    <div class="container">

        <header>
            <img src="images/witlogo.png" alt="WITS UNIVERSITY" class="logo">
            
            <nav>

                <a href="#" class="hide-desktop">
                    <img src="images/nav_drawer.png" alt="toggle menu" class="menu" id="menu">
                </a>

                <ul class="show-desktop hide-mobile" id="nav">
                    <li><img id="exit" class="exit-btn hide-desktop" src="images/exit.png" alt="exit menu"></li>
                    <li><a href="#">home</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">contact us</a></li>
                    <li><a href="#">services</a></li>
                    
                </ul>

            </nav>

        </header>

        <section>
            <img src="images/witlogo.png" alt="kudu graphic" class="kudu">

            <h1>Modern Intergrated WITS System</h1>
            <p class="subhead">Every service you can imagine at your fingertip.</p>

            <img src="images/scroll.jpg" alt="scroll down" class="scroll hide-mobile show-desktop">
        </section>
    </div>

    <div class="blue-container">
        <div class="container">

            <ul>
                <li>
                    <img src="images/user_icon.jpg" alt="Profile icon">
                    <p>Profile<br>View or amend your details.</p>
                </li>

                <li>
                    <img src="images/icon-overflow.png" id="overflow-card" alt="Overflow icon">
                    <p>Wits Overflow<br>For all your course related questions.</p>
                </li>

                <li>
                    <img src="images/icon-safe-space.jpg" alt="SafeSpace icon">
                    <p>Safe Space<br>You'll never feel alone.</p>
                </li>

                <li>
                    <img src="images/icon-health.jpg" alt="Health icon">
                    <p>Health<br>Healthy living choices.</p>
                </li>

                <li>
                    <img src="images/icon-accomodation.png" alt="Accomodation icon">
                    <p>Accomodation<br>Apply to your favourite accomodation.</p>
                </li>

                <li>
                    <img src="images/icon-creatives.jpg" alt="Creatives icon">
                    <p>Creatives<br>Unleash your talent.</p>
                </li>
            </ul>

        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="container">
                <a href="#">
                    <img src="images/witlogo.png" class="logo" alt="logo">
                </a>
                <p class="address">1 Jan Smuts Avenue, Braamfontein, 1016<br>South Arica</p>
                <ul class="footer-links">
                    <li><a href="#">Terms of Service </a></li>
                    <li><a href="#">Privacy Policy </a></li>
                </ul>
                
            </div>
        </div>
    </footer>

    <script>

        var menu = document.getElementById('menu');
        var nav = document.getElementById('nav');
        var exit = document.getElementById('exit');

        menu.addEventListener('click', function(e){

            nav.classList.toggle('hide-mobile');
            e.preventDefault();
        })

        exit.addEventListener('click', function(e){

            nav.classList.add('hide-mobile');
            e.preventDefault();
        })

    </script>

    <script type="text/javascript">
        document.getElementById("overflow-card").onclick = function(){
            location.href = "overflow-home.php";
        };
    </script>
</body>
</html>