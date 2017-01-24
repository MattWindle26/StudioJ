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
  <section>
    <div class="inner-container" >
      <h2>Get in touch!</h2>
      <form method="POST" action="http://formspree.io/info@studiojburnley.co.uk" >
        <div class="form-top">
          <div class="form-left">
            <label>Full Name</label>
            <input name="fullname" type="text">
            <label>Your Stylist</label>
            <select name="stylist" >
              <option disabled="true" value="Choose">Choose your stylists</option>
              <option value="Jade">Jade</option>
              <option value="Jenna">Jenna</option>
            </select>
            <label>Email Address</label>
            <input name="email" type="email" placeholder="example@email.com" >
          </div> <!-- end of form left -->
          <div class="form-right" >
            <label>Your Message</label>
            <textarea name="message"></textarea>
          </div> <!-- end of form right -->
        </div>
        <input type='button' name="submit" value='Send Message' >
      </form>
    </div>
  </section>
</main>

<?php include_once $path.'/includes/footer.php'; ?>
