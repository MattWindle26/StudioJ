<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="/dist/css/main.css" media="screen" >
    <link rel="icon" href="/dist/images/favicon.ico" >
    <title>Studio J - Hair Salon</title>
  </head>
  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; ?>
    <?php include_once $path.'/includes/header.php'; ?>

<main class="" role="main" >
  <section >
    <div class="inner-container stylist" >
      <div class="profile-wrapper" >
      <div class="profile-pic" id="profile-pic" >
        <img src="/dist/images/stylists/jade.png" alt="Portrait picture of Studio J stylist Jade Windle." >
      </div>
      <article class="profile-content" >
        <h2>Jade Windle</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="social-media" >
          <a href="https://www.facebook.com/jadestudioj/" ><img src="/dist/images/icons/facebook.svg" alt="Facebook logo" ></a>
          <a href="https://twitter.com/jadewindle" ><img src="/dist/images/icons/twitter.svg" alt="Facebook logo" ></a>
          <a href="https://www.instagram.com/jadeywindle92/" ><img src="/dist/images/icons/instagram.svg" alt="Facebook logo" ></a>
        </div> <!-- end of social-media -->
      </article>
    </div> <!-- end of profile-wrapper -->
    </div> <!-- end of inner-container -->
  </section>
  <section class="pattern-bg">
    <div class="inner-container" >
    <article>
      <h2>My Work</h2>
      <div class="work-image-wrapper" >
        <div class="feature-image-wrapper">
          <img class="feature" src="/dist/images/work/red-hair.jpg" >
        </div>
        <div class="grid">
          <div class="cell">
            <img src="/dist/images/work/curly-hair.jpg" >
          </div>
          <div class="cell">
            <img src="/dist/images/work/curly-hair.jpg" >
          </div>
          <div class="cell">
            <img src="/dist/images/work/curly-hair.jpg" >
          </div>
          <div class="cell">
            <img src="/dist/images/work/curly-hair.jpg" >
          </div>
        </div>
      </div>
      </article>
    </div>
  </section>
  <section class="testimonial">
    <div class="inner-container" >
    <h2>What my clients have to say</h2>
      <?php
        $jsondata = file_get_contents($path.'/facebook.json');
        $json = json_decode($jsondata, true);
        $rand = rand(0,8);
        $rating = $json['data'][$rand]['rating'];
        $url =" http://graph.facebook.com/" . $json['data'][$rand]['reviewer']['id'] . "/picture?type=large";
        echo "<div class='testimonial-wrapper'>";
        echo "<img class='testimonial-img' src='".$url."'>";
        echo "<h3>" . $json['data'][$rand]['reviewer']['name'] . "</h3>";
        echo "<div class='rating-wrapper' >";
        while($x <= $rating-1) {
            echo "<img class='rating' src='/dist/images/icons/star.svg' >";
            $x++;
        }
        echo "</div>";
        echo "<p>" . $json['data'][$rand]['review_text'] . "</p>";
        echo "</div>";

      ?>
    </div>
  </section>
</main>

<?php include_once $path.'/includes/footer.php'; ?>
