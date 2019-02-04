<?php

  declare(strict_types=1);

  require __DIR__.'/data.php';

  $sortByPost = usort($newsFeed, 'sortByDate');

  if (isset($_GET['sortBy'])) {
      $sortBy = $_GET['sortBy'];

      if ($sortBy === 'author') {
          $sortByPost = usort($newsFeed, 'sortByAuthor');
      } elseif ($sortBy === 'date') {
          $sortByPost = usort($newsFeed, 'sortByDate');
      } elseif ($sortBy === 'likes') {
          $sortByPost = usort($newsFeed, 'sortByLikes');
      }
  }

  if (isset($_GET['Author'])) {
      $sortOut = $_GET['Author'];
      $newsFeed = sortOutAuthor($newsFeed, $sortOut);
  }

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

    <button onclick="topFunction()" class="upBtn" id="upBtn" title="Go to top">
      <i class="fas fa-angle-up"></i>
    </button>
