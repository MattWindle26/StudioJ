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
        <img src="/dist/images/stylists/jade-profile.jpg" alt="Portrait picture of Studio J stylist Jade Windle." >
      </div>
      <article class="profile-content" >
        <h2>Jade Windle</h2>
        <p>I have been a level 3 qualified hairdresser for almost 8 years now, I absolutely love what I do, most days it is more of a passion than a job to me, making somebody feel confident when they walk out of the salon is what makes me feel happy and it's what makes me keep doing what I do. </p>

        <p>I have been Co-owner of StudioJ for almost 4 years now and I would never look back, it's the best thing I have never done, I see long term future in the salon and we always keep the salon fresh and modern and we will always continue to learn new techniques to keep up with trending fashion</p>
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
  <section class="hair-pattern">
    <div class="inner-container" >
      <h2>Price List</h2>
      <ul class="dotted-list">
        <li><span>Trim</span><span>£5.90</span></li>
        <li><span>Shampoo, Cut &amp; Finish </span><span>* £8.30</span></li>
        <li><span>Roots</span><span>* £9.30 </span></li>
        <li><span>Full Colour</span><span>* £9.30 </span></li>
        <li><span>Half Head of Foils</span><span>* £9.80 </span></li>
        <li><span>Full Head of Foils</span><span>* £10.40 </span></li>
        <li><span>Ombre/Balyage</span><span>* £10.40 </span></li>
        <li><span>Pin Up/Styling</span><span>* £10.40 </span></li>
        <li><span>Olaplex</span><span>£10.40 </span></li>
      </ul>
      <p>* These services are dependant on hair length and colour, so prices may vary, for more information <a href="/contact.php" >contact us</a></p>

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
