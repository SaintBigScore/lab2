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
    <title> This is Saint Big Score Tourism</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</head>
<body>
<header class="header">
    <h1 class="grid-60" id="#">This Saint BigScore Toursim</h1>
    <ul>

        <a href="index.php">Home</a><br>
        <a href="about.php">About Us</a><br>
        <a href ="event.php">Destinations</a><br>
        <a href ="active.php">Things to do</a><br>
        <a href="news.php">News</a><br>

    </ul>
    </header>

    
    <main>
        <p>
            <a>WORLD NEWS</a>
            <li><a href="http://www.bbc.co.uk" target="_blank"><img src="assets/images/bbclogo.jpg" alt="BBC">
        </p>
        <p>
            <a>TOURISM NEWS</a>
            <li><a href="http://www.UNWTO.org" target="_blank"><img src="assets/images/UNWTOlogo.jpg" alt="UNWTO">
        </p>
    </main>
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