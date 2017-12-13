<?php
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Suaps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/app.css" rel="stylesheet">



  </head>

  <body>

    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class ="navbar-brand" href="#">Suaps</a>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="login.php">Se connecter</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


    <?php if(isset($_SESSION['flash'])): ?>
      <?php  foreach($_SESSION['flash'] as $type => $message): ?>

        <div class="alert alert-<?= $type ?>">
          <?= $message; ?>
        </div>
      <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
