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
  <section class="pattern-bg" >
    <div class="inner-container products" >
      <div class="product-header" >
        <div class="product-info-wrapper">
          <h2>Olaplex</h3>
          <h3>95% of our clients recommend using Opalex&reg; for a long lasting new hair feel</h3>
        </div>
        <img src="/dist/images/opalex.png" alt="three bottles of opalex products" >
      </div> <!-- end of product header -->
      <div class="product-widget-wrapper" >
        <div class="product-widget" >
          <p class="dark" >Rebuilds broken hair</p>
        </div>
        <div class="product-widget" >
          <p class="dark" >Keeps a longer lasting effect</p>
        </div>
        <div class="product-widget" >
          <p class="dark" >Restore Comprimised hair</p>
        </div>
        <div class="product-widget" >
          <p class="dark" >The ultimate breakage insurance </p>
        </div>
      </div>
      <h3 class="dark">Ask your <a href="/our-stylists.php" >stylist</a> in store for more details</h3>
    </div>
</main>

<?php include_once $path.'/includes/footer.php'; ?>
