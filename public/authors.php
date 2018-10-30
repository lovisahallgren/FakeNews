<?php

declare(strict_types=1);

require __DIR__.'/header.php';
?>


<article class="sort">
  <form>
    Sort by author:
    <?php foreach ($authors as $author): ?>
    <button type="submit" name="Author" value="<?= $author['name'];?>"><?=$author['name']?></button>
  <?php endforeach; ?>
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
