<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Labour</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <!-- Hero Section -->
  <section class="hero" id="home" style="background-image: url('images/labour.jpg'); background-size: cover; background-position: center; height: 100vh;">
    <div class="hero-content">
        <h1>Welcome to My Labour</h1>
        <p>Your go-to platform for finding and hiring skilled laborers.</p>
        <a href="#services" class="btn">Explore Our Services</a>
    </div>
</section>


  <!-- About Section -->
  <?php include 'about.php'; ?>

  <!-- Services Section -->
  <?php include 'services.php'; ?>

  

  <!-- Contact Section -->
  <?php include 'contact.php'; ?>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
