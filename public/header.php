<?php

declare(strict_types=1);
require __DIR__.'/data.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fake News</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar">
        <a href="index.php" class="logo">BBNonsense</a>
        <ul class="main-nav">
          <li><a href="index.php" class="nav-links">Posts</a></li>
          <li><a href="authors.php" class="nav-links">Authors</a></li>
        </ul>
    </nav>

    <button onclick="topFunction()" id="upBtn" title="Go to top">
      <i class="fas fa-angle-up"></i>
    </button>
