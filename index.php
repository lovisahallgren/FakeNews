<?php

declare(strict_types=1);

require __DIR__.'/header.php';
require __DIR__.'/functions.php';
require __DIR__.'/data.php';
?>


<body>
  <nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
      <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo">Logo</a>
    <ul class="main-nav" id="js-menu">
      <li>
        <a href="#" class="nav-links">Home</a>
      </li>
      <li>
        <a href="about.php" class="nav-links">About Us</a>
      </li>
      <li>
        <a href="#articles" class="nav-links">Articles</a>
      </li>
        <li>
          <div class="dropdown">
            <a href="#sortby" class="nav-links">Sort by</a>
            <span class="navbar-dropdown" id="js-navbar-dropdown">
              <i class="fa fa-caret-down"></i>
            </span>
            <div class="dropdown-links">
              <a href="#">Author</a>
              <a href="#">Popular</a>
              <a href="#">Released</a>
            </div>
          </div>
        </li>
    </ul>
  </nav>

  <!-- <div class="dropdown">
    <button class="dropbtn">Sort By...</button>
  </div>
  <div class="dropdown-content">
    <a href="#">Author</a>
    <a href="#">Popular</a>
    <a href="#">Released</a>
  </div> -->
<main>
  <?php foreach ($newsFeed as $article): ?>
    <div class="wrapper">
      <section>
        <div class="title">
          <?= $article['title']?>
        </div>
        <div class="article">
          <?= nl2br($article['content']) ?>
        </div>
        <div class="notes">
          <div class="publisher">
            <?= $article['author'].' '.$article['published date']?>
          </div>
          <div class="likes">
            Likes: <?= $article['like counter']?>
          </div>
      </div>

      </section>
  </div>
  <?php endforeach ?>
</main>
<?php
require __DIR__.'/footer.php';
 ?>
