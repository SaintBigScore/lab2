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
    <title>Document</title>
</head>

<body>
    <div class="hero">
        <div class="nav-bar">
            <div class="nav-logo">
                <img src="logo.pn" alt="">
            </div>
            <div class="nav-links" id="nav-links">
                <i class="fa fa-close onclick="closeMenu()></i>
                <ul>
                    <a href="#"><li>Home</li></a>
                    <a href="#"><li>About</li></a>
                    <a href="#"><li>News</li></a>
                    <a href="#"><li>Things to do</li></a>
                    <a href="#"><li>Travel</li></a>
                </ul>
                <button type="button" class="btn">SIGN UP</button>
                
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
        <div class="banner-title">
            <h1>Welcome to<span> <br> </span>Saint Bigscore Tourism</h1>
            <button class="button" class="btn2">LOGIN</button>
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
            <ul>
                <li><a href="http://www.facebook.com"><img src="facebooklogo.jpg" alt="Facebook"></a></li>
                <li><a href="http//www.twitter.com"><img src="twitterlogo.jpg" alt="twitter"></a></li>
                <li><a href="http//www.youtube.com"><img src="youtubelogo.jpg" alt="youtube"></a></li>
                <li><a href="http//www.instagram.com"><img src="instagramlogo.jpg" alt="instagram"></a></li>
            </ul>
        </div>
    </footer>
</body>
</html>