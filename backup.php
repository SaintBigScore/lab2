<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1></h1>

    <br>

    Hello, 
    <h1>Welcome to Saint BigScore Tourism</h1>

    <header class="header">
        <ul>
            <a href="index.php">Home</a><br>
            <a href="about.php">About Us</a><br>
            <a href ="event.php">Destinations</a><br>
            <a href ="active.php">Things to do</a><br>
            <a href ="news.php">News</a><br>
            <a href="signup.php">Signup</a><br>
            <a href="login.php">Login</a> <br>
        </ul>
    </header>
    <main>
      <section class="grid-container">
        <div class="grid-50">
          <h2>Here is a direction to my school!</h2>

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4332.2369376741235!2d-2.142541653232606!3d57
            .1179381663197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488410483d2f0941%3A0x5d8969688e77366a!2sRobert+
            Gordon+University!5e0!3m2!1sen!2suk!4v1519561559104"
            width="450"
            height="300"
            frameborder="0"
            style="border: 0"
            allowfullscreen
          ></iframe>

          <h2>Here is a video about Tourism</h2>
          <iframe 
          width="450" height="220" 
          src="https://www.youtube.com/embed/X5uxoBv-myU" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
          picture-in-picture" allowfullscreen>

          </iframe>

        </div>
        <div class="grid-25">
          <h2>Tourism Tweets!</h2>

          <a class="twitter-timeline" data-height="580"
          href="https://twitter.com/PETAUK?ref_src=twsrc%5Etfw">Tweets by PETAUK</a> 
          <script async 
          src="https://platform.twitter.com/widgets.js" 
          charset="utf-8">
         </script>
        </div>
        <div class="grid-25">
          <h2>My Research</h2>

          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FBestOfScottishLife%2Fposts%2F4796773290401700%3A0&show_text=true&width=500" 
          width="500" height="580" 
          style="border:none;overflow:hidden" 
          scrolling="no" frameborder="0" 
          
          
          allowfullscreen="true" 
          allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
          </iframe>
        </div>
      </section>
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