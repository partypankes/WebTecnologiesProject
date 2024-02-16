<?php
require('../auth/auth.php');
?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - SapurEat</title>
    <link rel="stylesheet" href="../global.css">
  <link rel="stylesheet" href="aboutUs.css">
</head>
<body>
<div class="backdrop"></div>

<?php
    include('../_header/baseHeader.php');
?>

<main>

  <section class="intro">
    <div class="container">
      <h2>Unleash Your Culinary Creativity</h2>
      <p>Join SapurEat and connect with fellow cooking enthusiasts, share recipes, and explore gastronomic delights.</p>
      <div class="buttons">
        <a href="#" class="button">Get Started</a>
        <a href="#" class="button">Learn More</a>
      </div>
    </div>
  </section>

  <section class="platform-info">
    <div class="container">
      <p>SapurEat is a lively social platform where cooking enthusiasts can share recipes and gastronomic experiences. Engage with other users through reviews, likes, and comments, creating dynamic forums under each post. Our platform also features personal profiles for each user and a monthly leaderboard showcasing the most popular recipes.</p>
    </div>
  </section>

  <section class="team">
    <div class="container">
      <h2>Meet Our Team</h2>
      <div class="team-members">
        <article class="team-member">
          <img src="../resources/profile-prova.png" alt="John Doe">
          <h3>John Doe</h3>
          <p>Chef</p>
          <p>John is a talented chef with a passion for creating unique and delicious dishes.</p>
          <!-- Social Links -->
        </article>
        <!-- More team members -->
      </div>
    </div>
  </section>

  <section class="join-us">
    <div class="container">
      <h2>Join Us!</h2>
      <p>Exciting opportunities to join our culinary team</p>
      <a href="#" class="button">Available Positions</a>
    </div>
  </section>

  <section class="experience">
    <div class="container">
      <h2>Discover the SapurEat Experience</h2>
      <p>Join our community of food lovers and culinary enthusiasts</p>
      <div class="stats">
        <div class="stat">
          <h3>30%</h3>
          <p>Recipes Shared</p>
        </div>
        <div class="stat">
          <h3>30%</h3>
          <p>Community Size</p>
        </div>
        <div class="stat">
          <h3>30%</h3>
          <p>Engaged Users</p>
        </div>
      </div>
      <div class="buttons">
        <a href="#" class="button">Discover</a>
        <a href="#" class="button">Join</a>
      </div>
    </div>
  </section>

</main>

<?php
include('../structure/footer/footer.html');
?>


</body>
</html>
