<?php

session_start();

include ("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saint BigScore Tourism</title>
    <link rel="stylesheet" href="assets/CSS/style.css" />

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
            <a href ="news.php">News</a><br>
        </ul>
    </header>
    <main>
    <nav class="grid-container">
        <p>
            Introduction to Saint BigScore Tourism: Saint BigScore Tourism provides a platform where tourists could upload and share their tour experiences and adventure with fellow lovers and seekers of tourism. It will provide a platform that will enable storytellers to write about their most exciting stories and there will also be a comment and like section, users will be able to interact with one another through the comment section. Login and Signup links will be provided. Links to accommodation bookings, flights, taxis will be provided. There will be an additional reference link that will guide tourists on new and unique places to visit. The website will provide links to social media platforms. Storytellers who love to travel will be able to post their experiences which could serve as motivation for story seekers. Accommodation, Flights, taxis and restaurants websites should be able to advertize their offers and discounts.
        </p>
        <p>
            Constraints: A GitHub repository file will be created and utilized. 
            The website will enable a Create, Read, Update and Delete system.
            The website will make use of a user and admin interface whereby the user will be able to access the website using the front end server while the admin will be able to monitor, maintain and update the website from the backend server.
            XAMP use will have to be effective and coherent.
            Ability to apply HTML, CSS, JavaScript, Browser, PHP and MySQL files, numbers and variables effectively.
            Other constraints include clients who might visit the web application but may not have an interest in storytelling or tourism and for that reason may not wish to register or if registered may not wish to be a long-term user.
            Numerical date of birth input and 20 alphabets maximum in names input on registration.            
        </p>
        <p>
            Functional Requirements. Signup Registration ability. 
Email and signup option for login authorisation.
Authentication: Retrieval with email or phone number for Password forget.
Update: Subscription to the email news update.
The current time will be noted by the user's browser on each upload.
Multi-File Upload: Storytellers will be able to upload their files, be it jpeg, png, and written words while story seekers will be able to view the files.
There will be a 500 number maximum of words for storytellers that can be written about their adventure.
The website will enable desktop and mobile login displays.
Attractive background display.
Secure DataBase System: User Information detail will be saved in the database and be ready for retrieval anytime it is requested.
Relaible and efficent comment section.
Social media links.
User age requirement. Users from all age groups will be able to register.
        </p>
    </nav>
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