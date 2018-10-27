<?php

declare(strict_types=1);

require __DIR__.'/header.php';
require __DIR__.'/functions.php';
require __DIR__.'/data.php';
?>

<article class="sort">
  <form>
    <h3>Sort by:</h3>
    <button type="submit" name="sortBy" value="author">Authors</button>
    <button type="submit" name="sortBy" value="date">Date</button>
    <button type="submit" name="sortBy" value="likes">Likes</button>
  </form>

</article>



<main>
  <?php foreach ($newsFeed as $article): ?>
    <div class="wrapper">
      <section>
        <div class="title">
          <?= $article['title']?>
        </div> <!-- title -->
        <div class="content">
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
