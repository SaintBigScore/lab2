<?php

session_start();

include "connection.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.cssstyle.css">
</head>
<body>
<a href="logout.php">Logout</a>
    <h1></h1>

    <br>

    Hello, 
    <h1>Welcome to Saint BigScore Tourism</h1>
    <div class="hero">
        <div class="nav-bar">
            <div class="nav-logo">
                <img src="#" alt="">
            </div>
            <div class="nav-links" id="nav-links">
                <i class="fa fa-close onclick="closeMenu()></i>
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="about.php"><li>About</li></a>
                    <a href="event.php"><li>Destinations</li></a>
                    <a href="active.php"><li>Things to do</li></a>
                    <a href="news.php"><li>News</li></a>
                </ul>

                <a type="button" class="btn" href="signup.php">SIGNUP</a>
                
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
        <div class="banner-title">
            <h1>This is<span> <br> </span>Saint Bigscore Tourism</h1>
            <a type="button" class="btn" href="login.php">LOGIN</a>
        </div>
        <div class="vertical-var">
            <div class="search-icon">
                <i class="fa-solid fa-list"></i>
                <i class="fa-solid fa-search"></i>
            </div>
            <div class="social-icon"></div>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
        </div>
    </div>
    <div class="notifications">
        <div class="contents"></div>

        <a type="button" class="btn" href="upload.php">UPLOAD</a>
        
        
        <div class="notification-img"></div>
        <br>
        <small>Subscribe to our tourism channel</small>
        <p><a href="">PREV</a><a href="">NEXT</a></p>
        <br>
    

    </div>
    <script>
        var show = document.getElementById("nav-links");
        function showMenu(){
            show.style.right = "0";

        }function closeMenu(){
            show.style.right = "-200px";
        }
    </script>
    <footer>
        <div class="footer">
            <h2>Find us on</h2>
            <ul>
                <li><a href="http://www.facebook.com"><img src="assets/images/facebooklogo.png" alt="Facebook"></a></li>
                <li><a href="http//www.twitter.com"><img src="assets/images/twitterlogo.png" alt="twitter"></a></li>
                <li><a href="http//www.youtube.com"><img src="assets/images/youtubelogo.png" alt="youtube"></a></li>
                <li><a href="http//www.instagram.com"><img src="assets/images/instagramlogo.png" alt="instagram"></a></li>
                <p>&copy; 2022 Saint BigScore</p>
            </ul>
        </div>
    </footer>
</body>
</html>