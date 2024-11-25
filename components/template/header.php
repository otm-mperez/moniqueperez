<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JPQFZ3DZTH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-JPQFZ3DZTH');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monique Perez | <?php echo $title; ?></title>
    <link href="./style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  </head>

  <body>
    <header id="site-header" class="texture <?php if ($name == 'Home'): echo 'home'; endif;?>">
      <div class="content full">
        <nav>
          <ul>
            <li><a href="./#about">About</a></li>
            <li><a href="./#work">Work</a></li>
            <li><a href="./resume.pdf" target="_blank">Resumé</a></li>
          </ul>
        </nav>
        <div class="intro">
          <?php if ($name == 'Home'): ?>
          <p>Welcome! My name is</p>
          <?php endif; ?>
          <img src="./assets/img/logo-horizontal.svg" alt="Monique Perez Logo">
          <?php if ($name == 'Home'): ?>
          <p>an empathetic, not-so-common sense UX/UI designer, developer, and digital director with <span class="strike">an agency</span>, <span class="strike">a marketing</span>, <span class="strike">an education</span>, <span class="strike">a healthcare</span>, <span class="strike">a retail</span>, a broad background.</p>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($name == 'Home'): ?>
      <img class="profile abs" src="./assets/img/pic-profile.png" alt="Image of Monique">
      <?php endif; ?>
    </header>
