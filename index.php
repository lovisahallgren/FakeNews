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
      <a href="" class="logo">Logo</a>
      <ul class="main-nav" id="js-menu">
        <li>
          <a href="index.php" class="posts">Posts</a>
        </li>
        <li>
          <a href="authors.php" class="authors">Authors</a>
        </li>
      </ul>
      <form>
        <button type="likes" name="likes">Likes</button>

      </form>
    <!--
      <li>
        <a href="index.php" class="nav-links">Home</a>
      </li>
      <li>
        <a href="articles.php" class="nav-links">Articles</a>
      </li>
        <li>
          <li class="dropdown" id="js-dropdown">
            <a href="#sortby" class="nav-links">Sort by...</a>
            <span class="navbar-dropdown" id="js-navbar-dropdown">
              <i class="fa fa-caret-down"></i>
            </span>
            <ul class="dropdown-links">
              <li>
                <a href="#">Author</a>
              </li>
              <li>
                <a href="#">Likes</a>
              </li>
              <li>
                <a href="#">Published</a>
              </li>
            </ul>
          </li>
        </li> -->
  </nav>

<main>
  <?php foreach ($newsFeed as $article): ?>
    <div class="wrapper">
      <section>
        <div class="title">
          <?= $article['title']?>
        </div> <!-- title -->
        <div class="article">
          <?= nl2br($article['content']) ?>
        </div> <!-- article -->
        <div class="notes">
          <div class="publisher">
            <?= $article['author'].' '.$article['published date']?>
          </div> <!-- publisher -->
          <div class="likes">
            Likes: <?= $article['like counter']?>
          </div> <!-- likes -->
      </div> <!-- notes -->

      </section>
   </div> <!-- wrapper -->
  <?php endforeach ?>
</main>

<?php
require __DIR__.'/footer.php';
 ?>
